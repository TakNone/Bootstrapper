<?php

declare(strict_types = 1);

namespace Tak\Liveproto\Tl;

use Tak\Liveproto\Utils\Tools;

use Tak\Liveproto\Utils\Helper;

use Tak\Liveproto\Parser\Tl;

use function Amp\File\createDirectoryRecursively;

use function Amp\File\read;

defined('DOCPATH') || define('DOCPATH',getenv('DOCPATH') ?: ($_ENV['DOCPATH'] ?? __DIR__));

abstract class DocBuilder {
	static public function mdSafe(string $string) : string {
		return htmlentities(preg_replace('/([\\\\`*_{}\[\]\(\)#\+\-\.!\|])/','\\\\$1',$string));
	}
	static public function layer(bool $secret = false) : int {
		$layer = read(__DIR__.DIRECTORY_SEPARATOR.($secret ? 'secret.tl' : 'api.tl'));
		if(preg_match('~\/\/\sLAYER\s(?<layer>\d+)~i',$layer,$match)):
			return intval($match['layer']);
		else:
			throw new \Exception('The desired layer was not found !');
		endif;
	}
	static private function extractPageInfoFromUrl(string $url) : array {
		$html = @file_get_contents($url);
		$results = ['description'=>strval(null),'params'=>array(),'errors'=>array(),'constructors'=>array(),'return'=>strval(null)];
		if(is_string($html)):
			$doc = new \DOMDocument();
			libxml_use_internal_errors(true);
			$doc->loadHTML($html);
			libxml_clear_errors();
			$xpath = new \DOMXPath($doc);
			$results['description'] = trim(strval($xpath->evaluate('string(//div[@id="dev_page_content"]/p[1])')));
			foreach($xpath->query('//h3[normalize-space(text())="Parameters"]/following-sibling::table[1]//tr') as $tr):
				$cells = $tr->getElementsByTagName('td');
				if($cells->length === 3):
					$results['params'][trim($cells->item(0)->textContent)] = [
						'type'=>trim($cells->item(1)->textContent),
						'description'=>trim($cells->item(2)->textContent)
					];
				endif;
			endforeach;
			foreach($xpath->query('//h3[normalize-space(text())="Possible errors"]/following-sibling::table[1]//tr') as $tr):
				$cells = $tr->getElementsByTagName('td');
				if($cells->length === 3):
					$results['errors'][trim($cells->item(1)->textContent)] = [
						'code'=>trim($cells->item(0)->textContent),
						'description'=>trim($cells->item(2)->textContent)
					];
				endif;
			endforeach;
			foreach($xpath->query('//h3[normalize-space(text())="Constructors"]/following-sibling::table[1]//tr') as $tr):
				$cells = $tr->getElementsByTagName('td');
				if($cells->length === 2):
					$results['constructors'][trim($cells->item(0)->textContent)] = [
						'description'=>trim($cells->item(1)->textContent)
					];
				endif;
			endforeach;
			foreach(['Result','Type'] as $return):
				$results['return'] = trim(strval($xpath->evaluate('string(//h3[normalize-space(text())="'.$return.'"]/following-sibling::*[1])')));
				if(empty($results['return']) === false) break;
			endforeach;
		endif;
		return $results;
	}
	static private function create(array $tls) : void {
		$folderTypes = DOCPATH.DIRECTORY_SEPARATOR.'type';
		createDirectoryRecursively($folderTypes);
		$folderConstructors = DOCPATH.DIRECTORY_SEPARATOR.'constructor';
		createDirectoryRecursively($folderConstructors);
		$folderMethods = DOCPATH.DIRECTORY_SEPARATOR.'method';
		createDirectoryRecursively($folderMethods);
		$readme = DOCPATH.DIRECTORY_SEPARATOR.'README.md';
		$all = new Builder($folderTypes.'.md');
		$all->writeNewLine('# Types');
		$types = array();
		foreach($tls as $layer => $tl):
			$types = array_reduce($tl['constructors'],function(array $carry,array $item) : array {
				$carry[$item['type']] []= $item;
				return $carry;
			},$types);
		endforeach;
		foreach($types as $items):
			$all->writeNewLine();
			$all->writeNewLine('---');
			$all->writeNewLine();
			$type = current($items)['type'];
			$all->writeNewLine('##### '.str_replace(chr(46),chr(32),$type));
			$info = self::extractPageInfoFromUrl('https://core.telegram.org/type/'.$type);
			$stream = new Builder($folderTypes.DIRECTORY_SEPARATOR.$type.'.md');
			$stream->write('# '.$type);
			if(empty($info['description']) === false):
				$stream->writeNewLine();
				$desc = self::mdSafe(trim($info['description'],chr(46)));
				$stream->writeNewLine('**Description** : *'.$desc.'*');
			else:
				$desc = 'NOTHING';
			endif;
			$all->writeNewLine();
			$all->writeNewLine(':link: [*'.$desc.'*]'.chr(40).'type'.chr(47).$type.chr(41));
			$stream->writeNewLine();
			$stream->writeNewLine('**Layer** : '.$layer);
			$stream->writeNewLine();
			$stream->writeNewLine('```tl');
			foreach($items as $item):
				$stream->writeNewLine($item['raw']);
			endforeach;
			$stream->writeNewLine('```');
			$stream->writeNewLine();
			$stream->writeNewLine('---');
			$stream->writeNewLine();
			$stream->writeNewLine('## Constructors');
			$stream->writeNewLine();
			$stream->writeNewLine('| Constructor | Description |');
			$stream->writeNewLine('| :---: | :--- |');
			foreach($items as $item):
				$constructor = $item['predicate'];
				$description = trim($info['constructors'][$constructor]['description'] ?? 'NOTHING',chr(46));
				$stream->writeNewLine('| [**'.$constructor.'**](constructor/'.$constructor.') | '.$description.' |');
			endforeach;
			$stream->close();
		endforeach;
		$all->close();
		$all = new Builder($folderConstructors.'.md');
		$all->writeNewLine('# Constructors');
		foreach($tls as $layer => $tl):
			foreach($tl['constructors'] as $item):
				$all->writeNewLine();
				$all->writeNewLine('---');
				$all->writeNewLine();
				$all->writeNewLine('##### '.str_replace(chr(46),chr(32),$item['predicate']));
				$info = self::extractPageInfoFromUrl('https://core.telegram.org/constructor/'.$item['predicate']);
				$stream = new Builder($folderConstructors.DIRECTORY_SEPARATOR.$item['predicate'].'.md');
				$stream->write('# '.$item['predicate']);
				if(empty($info['description']) === false):
					$stream->writeNewLine();
					$desc = self::mdSafe(trim($info['description'],chr(46)));
					$stream->writeNewLine('**Description** : *'.$desc.'*');
				else:
					$desc = 'NOTHING';
				endif;
				$all->writeNewLine();
				$all->writeNewLine(':link: [*'.$desc.'*]'.chr(40).'constructor'.chr(47).$item['predicate'].chr(41));
				$stream->writeNewLine();
				$stream->writeNewLine('**Layer** : '.$layer);
				$stream->writeNewLine();
				$stream->writeNewLine('```tl');
				$stream->writeNewLine($item['raw']);
				$stream->writeNewLine('```');
				if(empty($item['params']) === false):
					$stream->writeNewLine();
					$stream->writeNewLine('---');
					$stream->writeNewLine();
					$stream->writeNewLine('## Parameters');
					$stream->writeNewLine();
					$stream->writeNewLine('| Name | Type | Description |');
					$stream->writeNewLine('| :---: | :---: | :--- |');
					foreach($item['params'] as $param):
						$name = $param['name'];
						$type = $param['type'];
						$parsed = Tl::parseType($type,false);
						$description = trim($info['params'][$name]['description'] ?? 'NOTHING',chr(46));
						$stream->writeNewLine('| '.($parsed['is_flag'] ? '**'.$name.'**' : '<mark>'.$name.'</mark>').' | [`'.$type.'`](type/'.$parsed['type'].') | '.$description.' |');
					endforeach;
				endif;
				$stream->writeNewLine();
				$stream->writeNewLine('---');
				$stream->writeNewLine();
				$stream->writeNewLine('## Type');
				$stream->writeNewLine();
				$parsed = Tl::parseType($item['type'],false);
				$stream->writeNewLine(chr(91).$item['type'].chr(93).chr(40).'type/'.$parsed['type'].chr(41));
				$stream->writeNewLine();
				$stream->writeNewLine('---');
				$stream->writeNewLine();
				$stream->writeNewLine('## Example');
				$stream->writeNewLine();
				$stream->writeNewLine('```php');
				$stream->writeNewLine();
				$stream->write(chr(36).lcfirst(str_replace(chr(46),strval(null),$parsed['type'])).' = ');
				self::writeExample($stream,$item['params'],$item['predicate'],$types);
				$stream->write(';');
				$stream->writeNewLine('```');
				$stream->close();
			endforeach;
		endforeach;
		$all->close();
		$all = new Builder($folderMethods.'.md');
		$all->writeNewLine('# Methods');
		foreach($tls as $layer => $tl):
			foreach($tl['methods'] as $item):
				$all->writeNewLine();
				$all->writeNewLine('---');
				$all->writeNewLine();
				$all->writeNewLine('##### '.str_replace(chr(46),chr(32),$item['method']));
				$info = self::extractPageInfoFromUrl('https://core.telegram.org/method/'.$item['method']);
				$stream = new Builder($folderMethods.DIRECTORY_SEPARATOR.$item['method'].'.md');
				$stream->write('# '.$item['method']);
				if(empty($info['description']) === false):
					$stream->writeNewLine();
					$desc = self::mdSafe(trim($info['description'],chr(46)));
					$stream->writeNewLine('**Description** : *'.$desc.'*');
				else:
					$desc = 'NOTHING';
				endif;
				$all->writeNewLine();
				$all->writeNewLine(':link: [*'.$desc.'*]'.chr(40).'method'.chr(47).$item['method'].chr(41));
				$stream->writeNewLine();
				$stream->writeNewLine('**Layer** : '.$layer);
				$stream->writeNewLine();
				$stream->writeNewLine('```tl');
				$stream->writeNewLine($item['raw']);
				$stream->writeNewLine('```');
				if(empty($item['params']) === false):
					$stream->writeNewLine();
					$stream->writeNewLine('---');
					$stream->writeNewLine();
					$stream->writeNewLine('## Parameters');
					$stream->writeNewLine();
					$stream->writeNewLine('| Name | Type | Description |');
					$stream->writeNewLine('| :---: | :---: | :--- |');
					foreach($item['params'] as $param):
						$name = $param['name'];
						$type = $param['type'];
						$parsed = Tl::parseType($type,false);
						$description = trim($info['params'][$name]['description'] ?? 'NOTHING',chr(46));
						$stream->writeNewLine('| '.($parsed['is_flag'] ? '**'.$name.'**' : '<mark>'.$name.'</mark>').' | [`'.$type.'`](type/'.$parsed['type'].') | '.$description.' |');
					endforeach;
				endif;
				$stream->writeNewLine();
				$stream->writeNewLine('---');
				$stream->writeNewLine();
				$stream->writeNewLine('## Result');
				$stream->writeNewLine();
				$parsed = Tl::parseType($item['type'],false);
				$stream->writeNewLine(chr(91).$item['type'].chr(93).chr(40).'type/'.$parsed['type'].chr(41));
				if(empty($info['errors']) === false):
					$stream->writeNewLine();
					$stream->writeNewLine('---');
					$stream->writeNewLine();
					$stream->writeNewLine('## Possible Errors');
					$stream->writeNewLine();
					$stream->writeNewLine('| Type | Code | Description |');
					$stream->writeNewLine('| :---: | :---: | :--- |');
					foreach($info['errors'] as $type => $error):
						$code = $error['code'];
						$description = trim($error['description'],chr(46));
						$stream->writeNewLine('| **'.$type.'** | `'.$code.'` | '.$description.' |');
					endforeach;
				endif;
				$stream->writeNewLine();
				$stream->writeNewLine('---');
				$stream->writeNewLine();
				$stream->writeNewLine('## Example');
				$stream->writeNewLine();
				$stream->writeNewLine('```php');
				$stream->writeNewLine();
				$stream->write(chr(36).lcfirst(str_replace(chr(46),strval(null),$parsed['type'])).' = ');
				self::writeExample($stream,$item['params'],$item['method'],$types);
				$stream->write(';');
				$stream->writeNewLine('```');
				$stream->close();
			endforeach;
		endforeach;
		$all->close();
	}
	static private function writeExample(Builder $stream,array $params,string $name,array $types,int $depth = 0) : void {
		$stream->write('$client->'.str_replace(chr(46),chr(45).chr(62),$name).'(');
		if($depth >= 4):
			$stream->write('...)');
		elseif(empty($params) === false):
			$stream->addIndent();
			foreach($params as $param):
				$name = $param['name'];
				$type = $param['type'];
				$parsed = Tl::parseType($type,false);
				if($parsed['flag_indicator'] === false):
					$randomValue = match(strtolower($parsed['type'])){
						'int' => random_int(0,100), // random_int(-0x80000000,0x7fffffff) //
						'int128' => Helper::generateRandomLargeInt(128),
						'int256' => Helper::generateRandomLargeInt(256),
						'int512' => Helper::generateRandomLargeInt(512),
						'long' => Helper::generateRandomLong(),
						'double' => random_int(-0x80000000,0x7fffffff) / 0x400,
						'string' => Helper::generateRandomString(),
						'true' => true,
						'bool' => boolval(random_int(0,1)),
						default => null
					};
					$constValue = match(strtolower($parsed['type'])){
						'bytes' => '"\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"', // mb_convert_encoding(random_bytes(5).'LiveProto'.random_bytes(5),'UTF-8') //
						'x' => '$client->help->getConfig(raw : true)',
						'inputpeer' => '$client->get_input_peer(peer : \'@LiveProtoChat\')',
						'inputuser' => '$client->get_input_user(peer : \'@TakNone\')',
						'inputchannel' => '$client->get_input_channel(peer : \'@LiveProto\')',
						'inputfile' => '$client->upload_file(path : \'file.png\')',
						'inputmedia' => '$client->get_input_media_uploaded(path : \'file.mp4\',file_type : Tak\\Liveproto\\Enums\\FileType::DOCUMENT)',
						default => null
					};
					if(is_null($randomValue) and is_null($constValue)):
						$parsed['params'] = $types[$parsed['type']] ?? array();
						if($parsed['is_vector']):
							$stream->writeNewLine($name.' : array(');
							$stream->addIndent();
							foreach($parsed['params'] as $group):
								$stream->writeNewLine();
								$stream->write($stream->indent());
								self::writeExample($stream,$group['params'],$group['predicate'],$types,$depth + 1);
								$stream->write(chr(44));
							endforeach;
							$stream->deleteIndent();
							$stream->writeNewLine(')');
						else:
							$stream->writeNewLine($name.' : ');
							self::writeExample($stream,empty($parsed['params']) ? array() : $parsed['params'][false]['params'],empty($parsed['params']) ? $parsed['type'] : $parsed['params'][false]['predicate'],$types,$depth + 1);
						endif;
					else:
						$isString = in_array($parsed['type'],['string','bytes']);
						$isInteger = in_array($parsed['type'],['int','int128','int256','int512','long']);
						$formatValue = match(true){
							str_contains($name,'md5') and $isString => md5('LiveProto'),
							str_contains($name,'url') and $isString => 'https://docs.liveproto.dev',
							str_contains($name,'email') and $isString => 'reply@liveproto.dev',
							str_contains($name,'phone') and $isString => '+1234567890',
							str_contains($name,'first_name') and $isString => 'Tak',
							str_contains($name,'last_name') and $isString => 'None',
							str_contains($name,'username') and $isString => 'TakNone',
							str_starts_with($name,'ip') and $isString => '127.0.0.1',
							str_starts_with($name,'hash') and $isInteger => 0,
							str_starts_with($name,'offset') and $isInteger => 0,
							default => $randomValue
						};
						$exported = is_null($randomValue) ? $constValue : var_export($formatValue,true);
						$stream->writeNewLine($name.' : '.($parsed['is_vector'] ? 'array('.$exported.')' : $exported));
					endif;
					$stream->write(chr(44));
				endif;
			endforeach;
			$stream->deleteIndent();
			$stream->writeNewLine(')');
		else:
			$stream->write(')');
		endif;
	}
	static public function start() : void {
		$json = array();
		$tls = array(__DIR__.DIRECTORY_SEPARATOR.'api.tl');
		foreach($tls as $tl):
			$layer = self::layer(str_contains($tl,'secret.tl'));
			$json[$layer] = Tl::parseFile($tl);
		endforeach;
		self::create($json);
	}
}

?>