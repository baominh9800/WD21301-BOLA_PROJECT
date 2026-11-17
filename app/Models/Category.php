<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\SeedStore;

final class Category
{
    public function all(bool $includeHidden = false): array
    {
        $products = (new Product())->all($includeHidden);
        return array_map(static function (array $category) use ($products): array {
            $category['count'] = count(array_filter($products, static fn(array $p): bool => $p['cat'] === $category['slug']));
            return $category;
        }, SeedStore::table('categories'));
    }
}
