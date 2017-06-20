<?php

include $_SERVER['DOCUMENT_ROOT'] . '/app/config/main.php';
include ROOT_DIR . '/services/Autoloader.php';

use \app\services\Autoloader;
use \app\controllers\AuthController;

spl_autoload_register([new Autoloader(), 'loadClass']);

(new \app\controllers\FrontController)->run();
?>
