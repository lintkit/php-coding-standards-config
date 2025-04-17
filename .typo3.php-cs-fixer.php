<?php

$finder = require __DIR__ . '/config/finder.php';
$config = require __DIR__ . '/config/rules.php';

$finder = $finder
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

if (is_dir($dir . '/app')) {
	$finder = $finder->exclude('html/typo3conf/ext');
}

return $config->setFinder($finder);
