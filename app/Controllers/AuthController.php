<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

final class AuthController extends Controller
{
    public function login(): void { $this->render('client/auth', ['title' => 'Đăng nhập', 'register' => false]); }
    public function register(): void { $this->render('client/auth', ['title' => 'Đăng ký', 'register' => true]); }
    public function forgot(): void { $this->render('client/forgot', ['title' => 'Quên mật khẩu']); }
    public function adminLogin(): void { $this->render('admin/login', ['title' => 'Đăng nhập quản trị'], 'admin-login'); }
}
