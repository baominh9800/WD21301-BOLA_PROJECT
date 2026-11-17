<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\SeedStore;

final class Product
{
    public function all(bool $includeHidden = false): array
    {
        $products = SeedStore::table('products');
        if (!$includeHidden) {
            $products = array_values(array_filter($products, static fn(array $p): bool => $p['status'] === 'live'));
        }
        $categories = array_column(SeedStore::table('categories'), 'name', 'slug');
        return array_map(static function (array $p) use ($categories): array {
            $p['category_name'] = $categories[$p['cat']] ?? 'Balo';
            return $p;
        }, $products);
    }

    public function find(int $id, bool $includeHidden = false): ?array
    {
        foreach ($this->all($includeHidden) as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }
        return null;
    }

    public function newest(): array
    {
        $ids = [2, 3, 10, 4];
        return array_values(array_filter(array_map(fn(int $id): ?array => $this->find($id), $ids)));
    }

    public function search(string $term, bool $includeHidden = false): array
    {
        $needle = self::normalise($term);
        return array_values(array_filter($this->all($includeHidden), static function (array $p) use ($needle): bool {
            return $needle === '' || str_contains(self::normalise($p['name'] . ' ' . $p['sub'] . ' ' . $p['code'] . ' ' . $p['category_name']), $needle);
        }));
    }

    private static function normalise(string $text): string
    {
        $groups = [
            'a' => 'àáảãạăằắẳẵặâầấẩẫậÀÁẢÃẠĂẰẮẲẴẶÂẦẤẨẪẬ',
            'e' => 'èéẻẽẹêềếểễệÈÉẺẼẸÊỀẾỂỄỆ',
            'i' => 'ìíỉĩịÌÍỈĨỊ',
            'o' => 'òóỏõọôồốổỗộơờớởỡợÒÓỎÕỌÔỒỐỔỖỘƠỜỚỞỠỢ',
            'u' => 'ùúủũụưừứửữựÙÚỦŨỤƯỪỨỬỮỰ',
            'y' => 'ỳýỷỹỵỲÝỶỸỴ', 'd' => 'đĐ',
        ];
        foreach ($groups as $replacement => $characters) {
            foreach (preg_split('//u', $characters, -1, PREG_SPLIT_NO_EMPTY) as $character) {
                $text = str_replace($character, $replacement, $text);
            }
        }
        return strtolower(trim($text));
    }
}
