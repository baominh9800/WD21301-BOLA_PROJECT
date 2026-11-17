<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

final class CartController extends Controller
{
    public function index(): void { $this->page('client/cart', 'Giỏ hàng'); }
    public function checkout(): void { $this->page('client/checkout', 'Thanh toán'); }
    public function preview(): void { $this->page('client/confirmation', 'Xem trước đơn hàng'); }

    private function page(string $view, string $title): void
    {
        $product = (new Product())->find(query_id(1));
        if ($product === null) {
            $this->notFound('Sản phẩm trong giỏ mẫu không khả dụng.');
            return;
        }
        $this->render($view, ['title' => $title, 'product' => $product]);
    }
}
