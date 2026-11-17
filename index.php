<?php
declare(strict_types=1);

// Tiện mở thư mục dự án từ htdocs/www. DocumentRoot nên đặt ở public/.
header('Location: public/index.php', true, 302);
exit;
