<?php
declare(strict_types=1);

// Bộ chạy CLI dùng kiểm tra View và Router, không phải web server.
parse_str($argv[1] ?? '', $_GET);
$_SERVER['SCRIPT_NAME'] = '/BOLA_MVC/public/index.php';
$_SERVER['REQUEST_METHOD'] = $argv[2] ?? 'GET';
http_response_code(200);
ob_start();
require dirname(__DIR__) . '/public/index.php';
$html = (string) ob_get_clean();
fwrite(STDOUT, $html);
fwrite(STDERR, 'HTTP_STATUS=' . http_response_code() . PHP_EOL);
