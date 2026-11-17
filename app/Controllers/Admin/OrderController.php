<?php
declare(strict_types=1);
namespace App\Controllers\Admin;
use App\Models\Order;
final class OrderController extends AdminController
{
    public function index(): void { $this->adminView('admin/orders', ['title' => 'Đơn hàng', 'active' => 'orders', 'orders' => (new Order())->all()]); }
    public function show(): void
    {
        $model = new Order();
        $order = $model->find(query_string('id'));
        if ($order === null) { $this->notFound('Không tìm thấy đơn hàng.'); return; }
        $this->adminView('admin/order', ['title' => 'Chi tiết đơn hàng', 'active' => 'orders', 'order' => $order, 'nextStatuses' => $model->nextStatuses($order['status'])]);
    }
}
