<?php
declare(strict_types=1);

// Cấu hình dành cho giai đoạn nối MySQL. Bản cắt MVC hiện đọc data/seed.json.
return [
    'host' => getenv('DB_HOST') ?: '127.0.0.1',
    'port' => getenv('DB_PORT') ?: '3306',
    'database' => getenv('DB_NAME') ?: 'bola',
    'username' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASS') ?: '',
    'charset' => 'utf8mb4',
];
