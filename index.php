<?php
    $paths = [
        dirname(__DIR__) . "/dev-blog",
        dirname(__DIR__, 2) . "/dev-blog",
        dirname(__DIR__, 3) . "/dev-blog",
    ];

    foreach ($paths as $path) {
        if ($path !== null && is_dir($path)) {
            define('ROOT', $path);
            break;
        }
    }

    require "database/config.php";
    require ROOT . DIRECTORY_SEPARATOR . 'engine' . DIRECTORY_SEPARATOR . 'start.php';