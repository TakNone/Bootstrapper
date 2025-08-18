<?php

declare(strict_types = 1);

namespace Tak\Liveproto\Tl;

use Tak\Liveproto\Utils\Tools;

use Tak\Liveproto\Parser\Tl;

use function Amp\File\read;

use function Amp\File\listFiles;

use function Amp\File\deleteFile;

use function Amp\File\isFile;

use function Amp\File\deleteDirectory;

use function Amp\File\isDirectory;

use function Amp\File\createDirectoryRecursively;

define('PATH',getenv('TLPATH') ?: ($_ENV['TLPATH'] ?? __DIR__));

define('PHP_TAG_START',base64_decode('PD9waHA'));

define('PHP_TAG_END',base64_decode('Pz4'));

abstract class Generator {
	static private function deleteFolder(string $directory) : void {
		if(isDirectory($directory)):
			foreach(listFiles($directory) as $path):
				if(isFile($directory.DIRECTORY_SEPARATOR.$path)):
					deleteFile($directory.DIRECTORY_SEPARATOR.$path);
				else:
					self::deleteFolder($directory.DIRECTORY_SEPARATOR.$path);
				endif;
			endforeach;
			deleteDirectory($directory);
		endif;
	}
	static private function cleanFiles() : void {
		if(isDirectory(PATH.DIRECTORY_SEPARATOR.'Types')) self::deleteFolder(PATH.DIRECTORY_SEPARATOR.'Types');
		if(isDirectory(PATH.DIRECTORY_SEPARATOR.'Functions')) self::deleteFolder(PATH.DIRECTORY_SEPARATOR.'Functions');
	}
	static private function create(array | string ...$tls) : void {
		self::cleanFiles();
		createDirectoryRecursively(PATH.DIRECTORY_SEPARATOR.'Types');
		createDirectoryRecursively(PATH.DIRECTORY_SEPARATOR.'Functions');
		$filename = PATH.DIRECTORY_SEPARATOR.'All.php';
		$all = new Builder($filename);
		$all->write(PHP_TAG_START);
		$all->writeNewLine();
		$all->writeNewLine('declare(strict_types = 1);');
		$all->writeNewLine();
		$all->writeNewLine('namespace Tak\\Liveproto\\Tl;');
		$all->writeNewLine();
		$all->writeNewLine('final class All {');
		$all->addIndent();
		$all->writeNewLine('static public function getConstructor(int $constructorId) : object {');
		$all->addIndent();
		$all->writeNewLine('return match(intval($constructorId)){');
		$all->addIndent();
		$json = ['constructors'=>array(),'methods'=>array()];
		foreach($tls as $tl):
			$schema = is_string($tl) ? json_decode(read($tl),true) : $tl;
			$json = array_merge_recursive($json,$schema);
		endforeach;
		$result = array_reduce($json['methods'],function($carry,$item) : array {
			if(str_contains($item['method'],'.')):
				$split = explode('.',$item['method']);
				$item['space'] = ucfirst($split[false]);
				$item['name'] = ucfirst($split[true]);
			else:
				$item['space'] = 'Other';
				$item['name'] = ucfirst($item['method']);
			endif;
			$item['name'] = Tools::snakeTocamel($item['name']);
			$carry[$item['space']] []= $item;
			return $carry;
		},array());
		foreach($result as $space => $methods):
			$folder = PATH.DIRECTORY_SEPARATOR.('Functions').DIRECTORY_SEPARATOR.$space;
			createDirectoryRecursively($folder);
			foreach($methods as $method):
				$id = '0x'.($method['id'] < 0 ? substr(dechex(intval($method['id'])),8) : dechex(intval($method['id'])));
				$function = $method['name'];
				$params = $method['params'];
				$return = $method['type'];
				$params = array_reduce($params,function($carry,$item) : array {
					$item['type'] = Tl::parseType($item['type']);
					$carry []= $item;
					return $carry;
				},array());
				$args = array_filter($params,fn($arg) => ($arg['type']['flag_indicator'] === false));
				usort($args,fn($a,$b) => $a['type']['is_flag'] <=> $b['type']['is_flag']);
				$param = array_map(fn($arg) => ($arg['type']['is_vector'] ? 'Vector<'.$arg['type']['type'].'>' : $arg['type']['type']).chr(32).$arg['name'],$args);
				$args = implode(',',array_map(fn($arg) => ($arg['type']['is_flag'] ? '? ' : null).self::findType($arg['type']).chr(32).chr(36).$arg['name'].($arg['type']['is_flag'] ? ' = null' : null),$args));
				$filename = $folder.DIRECTORY_SEPARATOR.$function.'.php';
				$stream = new Builder($filename);
				$stream->write(PHP_TAG_START);
				$stream->writeNewLine();
				$stream->writeNewLine('declare(strict_types = 1);');
				$stream->writeNewLine();
				$stream->writeNewLine('namespace Tak\\Liveproto\\Tl\\Functions\\'.$space.';');
				$stream->writeNewLine();
				$stream->writeNewLine('use Tak\\Liveproto\\Utils\\Binary;');
				$stream->writeNewLine();
				$stream->writeNewLine('use Tak\\Liveproto\\Utils\\Instance;');
				$stream->writeNewLine();
				$stream->writeDocComment(param : $param,return : $return);
				$stream->writeNewLine();
				$stream->writeNewLine('final class '.($function).' extends Instance {');
				$stream->addIndent();
				$stream->writeNewLine('public function request('.$args.') : Binary {');
				$stream->addIndent();
				$stream->writeNewLine('$writer = new Binary(true);');
				$stream->writeNewLine('$writer->writeInt('.$id.');');
				foreach($params as $param):
					$name = $param['name'];
					$type = $param['type'];
					self::writeRequest($stream,$params,$name,$type);
				endforeach;
				$stream->writeNewLine('return $writer;');
				$stream->deleteIndent();
				$stream->writeNewLine('}');
				$stream->writeNewLine('public function response(Binary $reader) : object {');
				$stream->addIndent();
				$stream->writeNewLine('$result = array();');
				$stream->writeNewLine('$result[\'result\'] = $reader->tgreadObject();');
				$stream->writeNewLine('return new self($result);');
				$stream->deleteIndent();
				$stream->writeNewLine('}');
				$stream->deleteIndent();
				$stream->writeNewLine('}');
				$stream->writeNewLine();
				$stream->writeNewLine(PHP_TAG_END);
				$stream->close();
				$all->writeNewLine($id.' => new \\Tak\\Liveproto\\Tl\\Functions\\'.$space.'\\'.$function.chr(44));
			endforeach;
		endforeach;
		$result = array_reduce($json['constructors'],function($carry,$item) : array {
			if(str_contains($item['predicate'],'.')):
				$split = explode('.',$item['predicate']);
				$item['space'] = ucfirst($split[false]);
				$item['name'] = ucfirst($split[true]);
			else:
				$item['space'] = 'Other';
				$item['name'] = ucfirst($item['predicate']);
			endif;
			if(in_array($item['name'],['True','Vector','Error','Null'])):
				$item['name'] .= 'Object';
			endif;
			$item['name'] = Tools::snakeTocamel($item['name']);
			$carry[$item['space']] []= $item;
			return $carry;
		},array());
		foreach($result as $space => $constructors):
			$folder = PATH.DIRECTORY_SEPARATOR.('Types').DIRECTORY_SEPARATOR.$space;
			createDirectoryRecursively($folder);
			foreach($constructors as $constructor):
				$id = '0x'.($constructor['id'] < 0 ? substr(dechex(intval($constructor['id'])),8) : dechex(intval($constructor['id'])));
				$predicate = $constructor['name'];
				$params = $constructor['params'];
				$return = $constructor['type'];
				$params = array_reduce($params,function($carry,$item) : array {
					$item['type'] = Tl::parseType($item['type']);
					$carry []= $item;
					return $carry;
				},array());
				$args = array_filter($params,fn($arg) => ($arg['type']['flag_indicator'] === false));
				usort($args,fn($a,$b) => $a['type']['is_flag'] <=> $b['type']['is_flag']);
				$param = array_map(fn($arg) => ($arg['type']['is_vector'] ? 'Vector<'.$arg['type']['type'].'>' : $arg['type']['type']).chr(32).$arg['name'],$args);
				$args = implode(',',array_map(fn($arg) => ($arg['type']['is_flag'] ? '? ' : null).self::findType($arg['type']).chr(32).chr(36).$arg['name'].($arg['type']['is_flag'] ? ' = null' : null),$args));
				$filename = $folder.DIRECTORY_SEPARATOR.$predicate.'.php';
				$stream = new Builder($filename);
				$stream->write(PHP_TAG_START);
				$stream->writeNewLine();
				$stream->writeNewLine('declare(strict_types = 1);');
				$stream->writeNewLine();
				$stream->writeNewLine('namespace Tak\\Liveproto\\Tl\\Types\\'.$space.';');
				$stream->writeNewLine();
				$stream->writeNewLine('use Tak\\Liveproto\\Utils\\Binary;');
				$stream->writeNewLine();
				$stream->writeNewLine('use Tak\\Liveproto\\Utils\\Instance;');
				$stream->writeNewLine();
				$stream->writeDocComment(param : $param,return : $return);
				$stream->writeNewLine();
				$stream->writeNewLine('final class '.($predicate).' extends Instance {');
				$stream->addIndent();
				$stream->writeNewLine('public function request('.$args.') : Binary {');
				$stream->addIndent();
				$stream->writeNewLine('$writer = new Binary(true);');
				$stream->writeNewLine('$writer->writeInt('.$id.');');
				foreach($params as $param):
					$name = $param['name'];
					$type = $param['type'];
					self::writeRequest($stream,$params,$name,$type);
				endforeach;
				$stream->writeNewLine('return $writer;');
				$stream->deleteIndent();
				$stream->writeNewLine('}');
				$stream->writeNewLine('public function response(Binary $reader) : object {');
				$stream->addIndent();
				$stream->writeNewLine('$result = array();');
				foreach($params as $param):
					$name = $param['name'];
					$type = $param['type'];
					self::writeResponse($stream,$params,$name,$type);
				endforeach;
				$stream->writeNewLine('return new self($result);');
				$stream->deleteIndent();
				$stream->writeNewLine('}');
				$stream->deleteIndent();
				$stream->writeNewLine('}');
				$stream->writeNewLine();
				$stream->writeNewLine(PHP_TAG_END);
				$stream->close();
				$all->writeNewLine($id.' => new \\Tak\\Liveproto\\Tl\\Types\\'.$space.'\\'.$predicate.chr(44));
			endforeach;
		endforeach;
		$all->writeNewLine('default => throw new \Exception(\'Constructor \'.$constructorId.\' not found !\')');
		$all->deleteIndent();
		$all->writeNewLine('};');
		$all->deleteIndent();
		$all->writeNewLine('}');
		$all->deleteIndent();
		$all->writeNewLine('}');
		$all->writeNewLine();
		$all->writeNewLine(PHP_TAG_END);
		$all->close();
	}
	static private function writeRequest(Builder $stream,array $params,string $name,array $type) : void {
		if($type['is_flag']):
			if($type['type'] != 'true'):
				$stream->writeNewLine('if(is_null('.chr(36).$name.') === false):');
				$stream->addIndent();
			endif;
		endif;
		if($type['flag_indicator']):
			$stream->writeNewLine(chr(36).$name.' = 0;');
			foreach($params as $flags):
				$flagname = $flags['name'];
				$flagtype = $flags['type'];
				if($flagtype['is_flag']):
					if(str_ends_with(strlen($name) === 0x5 ? $name.chr(49) : $name,strval($flagtype['flag_number']))):
						if($flagtype['type'] != 'true'):
							$stream->writeNewLine(chr(36).$name.' |= is_null('.chr(36).$flagname.') ? 0 : (1 << '.$flagtype['flag_index'].');');
						else:
							$stream->writeNewLine(chr(36).$name.' |= '.chr(36).$flagname.' ? 0 : (1 << '.$flagtype['flag_index'].');');
						endif;
					endif;
				endif;
			endforeach;
			$stream->writeNewLine('$writer->writeInt('.chr(36).$name.');');
		elseif($type['is_vector']):
			$stream->writeNewLine('$writer->tgwriteVector('.chr(36).$name.','.chr(39).$type['type'].chr(39).');');
		elseif($type['type'] == 'int'):
			$stream->writeNewLine('$writer->writeInt('.chr(36).$name.');');
		elseif($type['type'] == 'int128'):
			$stream->writeNewLine('$writer->writeLargeInt('.chr(36).$name.',128);');
		elseif($type['type'] == 'int256'):
			$stream->writeNewLine('$writer->writeLargeInt('.chr(36).$name.',256);');
		elseif($type['type'] == 'int512'):
			$stream->writeNewLine('$writer->writeLargeInt('.chr(36).$name.',512);');
		elseif($type['type'] == 'long'):
			$stream->writeNewLine('$writer->writeLong('.chr(36).$name.');');
		elseif($type['type'] == 'double'):
			$stream->writeNewLine('$writer->writeDouble('.chr(36).$name.');');
		elseif($type['type'] == 'string'):
			$stream->writeNewLine('$writer->tgwriteBytes('.chr(36).$name.');');
		elseif($type['type'] == 'bytes'):
			$stream->writeNewLine('$writer->tgwriteBytes('.chr(36).$name.');');
		elseif($type['type'] == 'true'):
			# It's just a type of flag ! We don't need to write a single byte to it #
		elseif($type['type'] == 'bool'):
			$stream->writeNewLine('$writer->tgwriteBool('.chr(36).$name.');');
		else:
			$stream->writeNewLine('$writer->write('.chr(36).$name.'->read());');
		endif;
		if($type['is_flag']):
			if($type['type'] != 'true'):
				$stream->deleteIndent();
				$stream->writeNewLine('endif;');
			endif;
		endif;
	}
	static private function writeResponse(Builder $stream,array $params,string $name,array $type) : void {
		if($type['is_flag']):
			$stream->writeNewLine('if($flags'.($type['flag_number'] === 1 ? null : $type['flag_number']).' & (1 << '.$type['flag_index'].')):');
			$stream->addIndent();
		endif;
		if($type['flag_indicator']):
			$stream->writeNewLine(chr(36).$name.' = $reader->readInt();');
		elseif($type['is_vector']):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->tgreadVector('.chr(39).$type['type'].chr(39).');');
		elseif($type['type'] == 'int'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->readInt();');
		elseif($type['type'] == 'int128'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->readLargeInt(128);');
		elseif($type['type'] == 'int256'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->readLargeInt(256);');
		elseif($type['type'] == 'int512'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->readLargeInt(512);');
		elseif($type['type'] == 'long'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->readLong();');
		elseif($type['type'] == 'double'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->readDouble();');
		elseif($type['type'] == 'string'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->tgreadBytes();');
		elseif($type['type'] == 'bytes'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->tgreadBytes();');
		elseif($type['type'] == 'true'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = true;');
		elseif($type['type'] == 'bool'):
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->tgreadBool();');
		else:
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = $reader->tgreadObject();');
		endif;
		if($type['is_flag']):
			$stream->deleteIndent();
			$stream->writeNewLine('else:');
			$stream->addIndent();
			/*
			 * I wanted to add a boolean,
			 * but I didn't know if its default could be false or true
			 */
			$flagDefault = match($type['type']){
				'true' => 'false',
				default => 'null'
			};
			$stream->writeNewLine('$result['.chr(39).$name.chr(39).'] = '.$flagDefault.';');
			$stream->deleteIndent();
			$stream->writeNewLine('endif;');
		endif;
	}
	static private function findType(array $type) : string {
		return $type['is_vector'] ? 'array' : match($type['type']){
			'int' => 'int',
			'int128' => 'int | string',
			'int256' => 'int | string',
			'int512' => 'int | string',
			'long' => 'int',
			'double' => 'float',
			'string' => 'string',
			'bytes' => 'string',
			'true' => 'bool',
			'bool' => 'bool',
			default => 'object'
		};
	}
	static public function start(mixed ...$tls) : void {
		$tls = array_filter($tls,fn(mixed $tl) : bool => is_string($tl) and isFile($tl));
		if(empty($tls)):
			$tls = array(__DIR__.DIRECTORY_SEPARATOR.'api.tl',__DIR__.DIRECTORY_SEPARATOR.'mtproto.tl',__DIR__.DIRECTORY_SEPARATOR.'secret.tl');
		endif;
		foreach($tls as $index => $tl):
			$type = mime_content_type($tl);
			if($type !== 'application/json'):
				$tls[$index] = Tl::parseFile($tl);
			endif;
		endforeach;
		self::create(...$tls);
		gc_collect_cycles();
	}
}

?>