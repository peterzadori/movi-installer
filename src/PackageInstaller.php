<?php

namespace movi\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class PackageInstaller extends LibraryInstaller
{

	public function getInstallPath(PackageInterface $package)
	{
		return 'packages/' . substr($package->getPrettyName(), 11);
	}



	/**
	 * @param string $packageType
	 * @return bool
	 */
	public function supports($packageType)
	{
		return $packageType === 'movi-package';
	}

}