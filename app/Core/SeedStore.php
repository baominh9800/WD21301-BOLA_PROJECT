<?php
declare(strict_types=1);

namespace App\Core;

// Kho dữ liệu mẫu chỉ đọc. Không trộn dữ liệu vào View và không ghi qua GET.
final class SeedStore
{
    private static ?array $data = null;

    public static function table(string $name): array
    {
        if (self::$data === null) {
            $contents = file_get_contents(APP_ROOT . '/data/seed.json');
            if ($contents === false) {
                throw new \RuntimeException('Không đọc được dữ liệu mẫu.');
            }
            self::$data = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);
        }
        return self::$data[$name] ?? [];
    }
}
