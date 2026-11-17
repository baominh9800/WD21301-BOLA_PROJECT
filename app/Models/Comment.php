<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\SeedStore;

final class Comment
{
    public function all(): array
    {
        $products = new Product();
        return array_map(static function (array $comment) use ($products): array {
            $comment['product'] = $products->find($comment['product_id'], true);
            $comment['filter_key'] = ['Chờ duyệt' => 'pending', 'Đã duyệt' => 'approved', 'Đang ẩn' => 'hidden'][$comment['status']];
            return $comment;
        }, SeedStore::table('comments'));
    }

    public function approvedForProduct(int $id): array
    {
        return array_values(array_filter($this->all(), static fn(array $c): bool => $c['product_id'] === $id && $c['status'] === 'Đã duyệt'));
    }
}
