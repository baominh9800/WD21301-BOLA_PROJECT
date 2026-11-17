<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\SeedStore;

final class Order
{
    public function all(): array
    {
        $products = new Product();
        $users = new User();
        return array_map(static function (array $order) use ($products, $users): array {
            $order['product'] = $products->find($order['product_id'], true);
            $order['customer'] = $users->find($order['user_id']);
            $order['subtotal'] = $order['product']['price'] * $order['quantity'];
            $order['shipping'] = shipping_fee($order['subtotal']);
            $order['total'] = $order['subtotal'] + $order['shipping'];
            $order['filter_key'] = ['Chờ xác nhận' => 'pending', 'Đã xác nhận' => 'confirmed', 'Đang giao' => 'transit', 'Đã giao' => 'delivered', 'Đã hủy' => 'canceled'][$order['status']];
            return $order;
        }, SeedStore::table('orders'));
    }

    public function find(string $id): ?array
    {
        foreach ($this->all() as $order) {
            if ($order['id'] === $id) {
                return $order;
            }
        }
        return null;
    }

    public function forUser(int $userId): array
    {
        return array_values(array_filter($this->all(), static fn(array $order): bool => $order['user_id'] === $userId));
    }

    public function nextStatuses(string $status): array
    {
        return [
            'Chờ xác nhận' => ['Chờ xác nhận', 'Đã xác nhận', 'Đã hủy'],
            'Đã xác nhận' => ['Đã xác nhận', 'Đang giao', 'Đã hủy'],
            'Đang giao' => ['Đang giao', 'Đã giao'],
            'Đã giao' => ['Đã giao'], 'Đã hủy' => ['Đã hủy'],
        ][$status] ?? [];
    }
}
