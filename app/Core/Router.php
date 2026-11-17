<?php
declare(strict_types=1);

namespace App\Core;

final class Router
{
    public function __construct(private array $routes)
    {
    }

    public function dispatch(string $method, mixed $route): void
    {
        if (!in_array($method, ['GET', 'HEAD'], true)) {
            header('Allow: GET, HEAD');
            $this->error(405, 'Bản giao diện chỉ hỗ trợ xem trang bằng GET.');
            return;
        }
        if (!is_string($route)) {
            $this->error(400, 'Đường dẫn không hợp lệ.');
            return;
        }
        $route = trim($route, '/');
        $route = $route === '' ? 'san-pham' : $route;
        if (!isset($this->routes[$route])) {
            $this->error(404, 'Trang bạn tìm chưa có trong dự án.');
            return;
        }
        // Lớp và phương thức chỉ lấy từ bảng route cố định, không include theo URL.
        [$controllerClass, $action] = $this->routes[$route];
        (new $controllerClass())->$action();
    }

    private function error(int $status, string $message): void
    {
        http_response_code($status);
        View::render('errors/error', ['title' => 'Không thể mở trang', 'status' => $status, 'message' => $message]);
    }
}
