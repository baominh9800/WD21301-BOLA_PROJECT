<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Models\{Category, Comment, Order, Product, User};

abstract class AdminController extends Controller
{
    protected function adminView(string $view, array $data): void
    {
        $counts = [
            'products' => count((new Product())->all(true)),
            'categories' => count((new Category())->all(true)),
            'orders' => count((new Order())->all()),
            'users' => count((new User())->all()),
            'comments' => count((new Comment())->all()),
        ];
        $this->render($view, array_merge(['counts' => $counts], $data), 'admin');
    }
}
