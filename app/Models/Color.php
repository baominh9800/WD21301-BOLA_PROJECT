<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\SeedStore;

final class Color
{
    public function all(): array
    {
        return SeedStore::table('colors');
    }
}
