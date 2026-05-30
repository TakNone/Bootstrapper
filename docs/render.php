<?php

declare(strict_types = 1);

require __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use Tak\Liveproto\Tl\DocBuilder;

use Tak\Asyncio\Loop;

putenv('DOCPATH='.__DIR__);

$_ENV['DOCPATH'] = __DIR__;

Loop::queue(function() : void {
	DocBuilder::start();
});

Loop::run();

?>