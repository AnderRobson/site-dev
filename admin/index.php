<?php
    $paths = [
        dirname(__DIR__) . DIRECTORY_SEPARATOR . "dev-admin",
        dirname(__DIR__, 2) . DIRECTORY_SEPARATOR .  "dev-admin",
        dirname(__DIR__, 3) . DIRECTORY_SEPARATOR .  "dev-admin",
    ];

    foreach ($paths as $path) {
        if ($path !== null && is_dir($path)) {
            define('ROOT', $path);
            break;
        }
    }

    require "../database/config.php";
    require ROOT . DIRECTORY_SEPARATOR . 'engine' . DIRECTORY_SEPARATOR . 'start.php';