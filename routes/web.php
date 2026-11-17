<?php
declare(strict_types=1);

use App\Controllers\{AccountController, AuthController, CartController, CatalogController, PageController};
use App\Controllers\Admin;

// Danh sách route cho phép. Không dùng tên Controller/View do người dùng truyền lên.
return [
    'trang-chu' => [CatalogController::class, 'home'],
    'san-pham' => [CatalogController::class, 'index'],
    'hang-moi' => [CatalogController::class, 'newest'],
    'san-pham/chi-tiet' => [CatalogController::class, 'show'],
    'tim-kiem' => [CatalogController::class, 'search'],
    'gio-hang' => [CartController::class, 'index'],
    'thanh-toan' => [CartController::class, 'checkout'],
    'xac-nhan' => [CartController::class, 'preview'],
    'dang-nhap' => [AuthController::class, 'login'],
    'dang-ky' => [AuthController::class, 'register'],
    'quen-mat-khau' => [AuthController::class, 'forgot'],
    'tai-khoan' => [AccountController::class, 'profile'],
    'don-hang' => [AccountController::class, 'orders'],
    'don-hang/chi-tiet' => [AccountController::class, 'order'],
    'yeu-thich' => [AccountController::class, 'favorites'],
    'gioi-thieu' => [PageController::class, 'about'],
    'chinh-sach' => [PageController::class, 'policies'],
    'lien-he' => [PageController::class, 'contact'],
    'huong-dan' => [PageController::class, 'guide'],
    'phan-hoi' => [PageController::class, 'preview'],
    'admin/dang-nhap' => [AuthController::class, 'adminLogin'],
    'admin' => [Admin\ProductController::class, 'index'],
    'admin/san-pham' => [Admin\ProductController::class, 'index'],
    'admin/san-pham/them' => [Admin\ProductController::class, 'create'],
    'admin/san-pham/sua' => [Admin\ProductController::class, 'edit'],
    'admin/tim-kiem' => [Admin\ProductController::class, 'search'],
    'admin/danh-muc' => [Admin\CategoryController::class, 'index'],
    'admin/bien-the' => [Admin\VariantController::class, 'index'],
    'admin/don-hang' => [Admin\OrderController::class, 'index'],
    'admin/don-hang/chi-tiet' => [Admin\OrderController::class, 'show'],
    'admin/nguoi-dung' => [Admin\UserController::class, 'index'],
    'admin/nguoi-dung/chi-tiet' => [Admin\UserController::class, 'show'],
    'admin/binh-luan' => [Admin\CommentController::class, 'index'],
    'admin/phan-hoi' => [Admin\PreviewController::class, 'index'],
];
