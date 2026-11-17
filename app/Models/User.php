<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\SeedStore;

final class User
{
    public function all(): array
    {
        return SeedStore::table('users');
    }

    public function find(int $id): ?array
    {
        foreach ($this->all() as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }
        return null;
    }
}
