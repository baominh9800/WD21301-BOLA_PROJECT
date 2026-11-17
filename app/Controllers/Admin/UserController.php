<?php
declare(strict_types=1);
namespace App\Controllers\Admin;
use App\Models\User;
final class UserController extends AdminController
{
    public function index(): void { $this->adminView('admin/users', ['title' => 'Người dùng', 'active' => 'users', 'users' => (new User())->all()]); }
    public function show(): void
    {
        $user = (new User())->find(query_id());
        if ($user === null) { $this->notFound('Không tìm thấy người dùng.'); return; }
        $this->adminView('admin/user', ['title' => 'Chi tiết người dùng', 'active' => 'users', 'user' => $user]);
    }
}
