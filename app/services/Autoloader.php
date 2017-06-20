<?php

namespace app\services;

class Autoloader {

    public function loadClass($className) {
        $path = str_replace('\\', '/', ROOT_DIR . str_replace('app\\', '', "/$className.php"));
        if (is_file($path)) {
            include $path;
        }
    }

}

?>