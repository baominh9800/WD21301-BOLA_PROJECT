<?php
declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap/app.php';

use App\Models\{Category, Comment, Order, Product, User, Variant};

function check(bool $condition, string $message): void
{
    if (!$condition) {
        throw new RuntimeException('FAILED: ' . $message);
    }
    echo 'PASS: ' . $message . PHP_EOL;
}

$products = new Product();
check(count($products->all()) === 12 && count($products->all(true)) === 13, 'Công khai loại đúng sản phẩm đang ẩn');
check($products->find(13) === null && $products->find(13, true)['status'] === 'hidden', 'Chi tiết khách không đọc sản phẩm đang ẩn');
check(count($products->search('LAPTOP')) === 4, 'Tìm kiếm không phân biệt hoa thường');
check(count($products->search('BALO HANG NGAY')) === 4, 'Tìm kiếm danh mục tiếng Việt không dấu');
check($products->search('<script>alert(1)</script>') === [], 'Từ khóa lạ không tạo kết quả giả');

$variants = (new Variant())->all();
foreach ($products->all() as $product) {
    $stock = array_sum(array_column(array_filter($variants, static fn(array $v): bool => $v['product_id'] === $product['id']), 'stock'));
    check($stock === $product['stock'], 'Tổng tồn biến thể khớp ' . $product['code']);
}
$orders = new Order();
check(count($orders->forUser(1)) === 2, 'Danh sách đơn của tài khoản mẫu chỉ chứa đơn thuộc tài khoản');
check($orders->find('001')['total'] === 320000, 'Tổng tiền đơn gồm giá và phí vận chuyển');
check($orders->find('004')['shipping'] === 0, 'Đơn từ 300.000 đồng được miễn phí vận chuyển mẫu');
check($orders->nextStatuses('Đã giao') === ['Đã giao'], 'Đơn đã giao không quay về trạng thái trước');
check(count((new User())->all()) === 6, 'Đọc danh sách người dùng');
check(count((new Category())->all()) === 4, 'Đọc danh mục từ Model');
check(count((new Comment())->approvedForProduct(3)) === 0, 'Không công khai bình luận chờ duyệt');
echo 'All model checks passed.' . PHP_EOL;
