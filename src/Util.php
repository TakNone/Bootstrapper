<?php

declare(strict_types=1);

namespace Tak\Liveproto;

use Composer\Composer;

final class Util {
	public function __construct(private Composer $composer){
	}
	public function findInstallPath(string $packageName) : ? string {
		$localRepo = $this->composer->getRepositoryManager()->getLocalRepository();
		$packages = $localRepo->getPackages();
		foreach($packages as $pkg){
			if($pkg->getName() === $packageName){
				return $this->composer->getInstallationManager()->getInstallPath($pkg);
			}
		}
		$vendorDir = $this->composer->getConfig()->get('vendor-dir');
		$fallbackPath = $vendorDir.DIRECTORY_SEPARATOR.str_replace(chr(47),DIRECTORY_SEPARATOR,$packageName);
		return file_exists($fallbackPath) ? $fallbackPath : null;
	}
}

?>