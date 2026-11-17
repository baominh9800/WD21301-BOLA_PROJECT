<?php
declare(strict_types=1);
namespace App\Controllers\Admin;
final class PreviewController extends AdminController
{
    public function index(): void { $this->adminView('admin/preview', ['title' => 'Xem trước thao tác', 'active' => 'products']); }
}
