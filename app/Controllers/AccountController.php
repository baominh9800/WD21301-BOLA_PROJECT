<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\{Order, Product, User};

final class AccountController extends Controller
{
    // Tài khoản cố định để xem giao diện. Chưa có xác thực/session thật.
    private const DEMO_CUSTOMER_ID = 1;

    public function profile(): void
    {
        $this->render('client/account', ['title' => 'Tài khoản', 'accountActive' => 'profile', 'customer' => (new User())->find(self::DEMO_CUSTOMER_ID)]);
    }

    public function orders(): void
    {
        $this->render('client/orders', ['title' => 'Đơn hàng của tôi', 'accountActive' => 'orders', 'orders' => (new Order())->forUser(self::DEMO_CUSTOMER_ID)]);
    }

    public function order(): void
    {
        $order = (new Order())->find(query_string('id', '001'));
        if ($order === null || $order['user_id'] !== self::DEMO_CUSTOMER_ID) {
            $this->notFound('Không tìm thấy đơn trong tài khoản mẫu.');
            return;
        }
        $this->render('client/order', ['title' => 'Chi tiết đơn hàng', 'accountActive' => 'orders', 'order' => $order]);
    }

    public function favorites(): void
    {
        $this->render('client/favorites', ['title' => 'Sản phẩm yêu thích', 'accountActive' => 'favorites', 'products' => array_slice((new Product())->all(), 0, 3)]);
    }
}
