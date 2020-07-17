<?php

define('ROOT',  dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

require APP . 'config' . DIRECTORY_SEPARATOR . 'config.php';

// echo ROOT . '</br>';
// echo APP;
// echo '<pre>';
// print_r($_SERVER);

new Application();
