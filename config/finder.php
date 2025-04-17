<?php

// The directory the script is being run from
$dir = $GLOBALS['_SERVER']['PWD'];

$finder = PhpCsFixer\Finder::create()
	// General
	->exclude('Library')
	->exclude('vendor')
	->exclude('var')

	->ignoreDotFiles(true)
	->ignoreUnreadableDirs()

	->in($dir);

if (is_file($dir . '/.gitignore')) {
	$finder = $finder->ignoreVCSIgnored(true);
}

return $finder;
