<?php
declare(strict_types=1);

namespace App\Core;

final class View
{
    public static function render(string $name, array $data = [], string $layout = 'client'): void
    {
        if (!preg_match('~^[a-z0-9/-]+$~D', $name) || !in_array($layout, ['client', 'admin', 'admin-login'], true)) {
            throw new \InvalidArgumentException('Tên view hoặc layout không hợp lệ.');
        }
        $viewFile = APP_ROOT . '/app/Views/' . $name . '.php';
        if (!is_file($viewFile)) {
            throw new \RuntimeException('Không tìm thấy view: ' . $name);
        }
        extract($data, EXTR_SKIP);
        $title = $title ?? 'BOLA';
        $active = $active ?? 'products';
        $isAdmin = $layout !== 'client';
        ob_start();
        try {
            require $viewFile;
            $content = (string) ob_get_clean();
        } catch (\Throwable $error) {
            ob_end_clean();
            throw $error;
        }
        require APP_ROOT . '/app/Views/layouts/' . $layout . '.php';
    }
}
