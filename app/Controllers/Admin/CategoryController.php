<?php
declare(strict_types=1);
namespace App\Controllers\Admin;
use App\Models\Category;
final class CategoryController extends AdminController
{
    public function index(): void { $this->adminView('admin/categories', ['title' => 'Danh mục', 'active' => 'categories', 'categories' => (new Category())->all(true)]); }
}
