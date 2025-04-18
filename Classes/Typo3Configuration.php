<?php

namespace LintKit\PhpCodingStandardsConfig;

use PhpCsFixer\Finder;

class Typo3Configuration extends Configuration {

	protected function getFilteredFinder(): Finder
	{
		$this->finder = parent::getFilteredFinder();

		$this->finder = $this->finder
			// Projects
			->exclude('backup')
			->exclude('html/assets')
			->exclude('html/_assets')
			->exclude('html/import')

			// TYPO3
			->exclude('html/fileadmin')
			->exclude('html/typo3')
			->exclude('html/typo3_src')
			->exclude('html/typo3conf/autoload')
			->exclude('html/typo3conf/l10n')
			->exclude('html/typo3temp')
			->exclude('html/uploads')
			->notPath('html/index.php')
			->notPath('html/typo3conf/LocalConfiguration.php')
			->notPath('html/typo3conf/PackageStates.php')
			->notPath('config/system/settings.php')
			->exclude('typo3/install')
			->exclude('typo3/sysext')
			->notPath('typo3/install.php')
		;

		if (is_dir($this->dir . '/app')) {
			$this->finder = $this->finder->exclude('html/typo3conf/ext');
		}

		return $this->finder;
	}
}
