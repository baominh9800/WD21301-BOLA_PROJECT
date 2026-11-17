<?php
declare(strict_types=1);

return [
    'name' => 'BOLA',
    // Rỗng: tự nhận đường dẫn public/ khi chạy dưới localhost hoặc thư mục con.
    // Có thể đặt BOLA_BASE_PATH=/BOLA_MVC/public khi cấu hình máy chủ đặc biệt.
    'base_path' => getenv('BOLA_BASE_PATH') ?: '',
    'shipping_fee' => 25000,
    'free_shipping_from' => 300000,
];
