<?php

declare(strict_types=1);

namespace Tak\Liveproto;

use Composer\Composer;

final class Util {
	public function __construct(private Composer $composer){
	}
	public function findInstallPath(string $packageName) : ? string {
		$rootPackage = $this->composer->getPackage();
		if($rootPackage and $rootPackage->getName() === $packageName){
			return dirname($this->composer->getConfig()->get('vendor-dir'));
		}
		$localRepo = $this->composer->getRepositoryManager()->getLocalRepository();
		$pkg = $localRepo->findPackage($packageName,'*');
		if($pkg){
			return $this->composer->getInstallationManager()->getInstallPath($pkg);
		}
		$vendorDir = $this->composer->getConfig()->get('vendor-dir');
		$fallbackPath = $vendorDir.DIRECTORY_SEPARATOR.str_replace(chr(47),DIRECTORY_SEPARATOR,$packageName);
		return file_exists($fallbackPath) ? $fallbackPath : null;
	}
}

?>