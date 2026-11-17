<?php
declare(strict_types=1);

// Mọi yêu cầu đi qua một điểm vào, sau đó Router chọn Controller.
require dirname(__DIR__) . '/bootstrap/app.php';

use App\Core\Router;
use App\Core\View;

try {
    $routes = require APP_ROOT . '/routes/web.php';
    (new Router($routes))->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', $_GET['route'] ?? 'san-pham');
} catch (Throwable $error) {
    http_response_code(500);
    error_log((string) $error);
    View::render('errors/error', ['title' => 'Có lỗi khi mở trang', 'status' => 500, 'message' => 'Vui lòng kiểm tra cấu hình PHP hoặc xem nhật ký lỗi trên máy chủ.']);
}
