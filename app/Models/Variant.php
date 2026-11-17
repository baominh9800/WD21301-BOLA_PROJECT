<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\SeedStore;

final class Variant
{
    public function all(): array
    {
        $products = new Product();
        return array_map(static function (array $v) use ($products): array {
            $v['product'] = $products->find($v['product_id'], true);
            return $v;
        }, SeedStore::table('variants'));
    }
}
