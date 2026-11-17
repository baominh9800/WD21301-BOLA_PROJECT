<?php
declare(strict_types=1);

define('APP_ROOT', dirname(__DIR__));

spl_autoload_register(static function (string $class): void {
    if (!str_starts_with($class, 'App\\')) {
        return;
    }
    $relative = substr($class, 4);
    $path = APP_ROOT . '/app/' . str_replace('\\', '/', $relative) . '.php';
    if (is_file($path)) {
        require $path;
    }
});

$GLOBALS['app_config'] = require APP_ROOT . '/config/app.php';
require APP_ROOT . '/app/Support/helpers.php';

if (PHP_SAPI !== 'cli') {
    header('Content-Type: text/html; charset=UTF-8');
}
