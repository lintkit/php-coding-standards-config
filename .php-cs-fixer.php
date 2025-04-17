<?php

$finder = require __DIR__ . '/config/finder.php';
$config = require __DIR__ . '/config/rules.php';

return $config->setFinder($finder);
