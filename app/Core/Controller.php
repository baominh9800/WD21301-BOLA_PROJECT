<?php
declare(strict_types=1);

namespace App\Core;

use App\Models\Color;

abstract class Controller
{
    protected function render(string $view, array $data = [], string $layout = 'client'): void
    {
        View::render($view, array_merge(['colors' => (new Color())->all()], $data), $layout);
    }

    protected function notFound(string $message = 'Không tìm thấy dữ liệu.'): void
    {
        http_response_code(404);
        $this->render('errors/error', ['title' => 'Không tìm thấy', 'status' => 404, 'message' => $message]);
    }
}
