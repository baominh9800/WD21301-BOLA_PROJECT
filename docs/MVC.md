# Cách các thành phần MVC phối hợp

Ví dụ bạn mở `public/index.php?route=san-pham/chi-tiet&id=2`:

1. `public/index.php` nạp bootstrap, tạo Router và chuyển route nhận được vào `dispatch()`.
2. Router chỉ tra danh sách khai báo trong `routes/web.php`; route này gọi `CatalogController::show()`.
3. Controller đọc `id`, gọi `Product::find(2)` và `Comment::approvedForProduct(2)`.
4. Product đọc kho dữ liệu mẫu, loại sản phẩm đang ẩn; Controller xử lý 404 nếu không có sản phẩm phù hợp.
5. Controller truyền `$product`, `$comments`, `$products` gợi ý cho `client/product.php`.
6. View renderer ghép nội dung với `layouts/client.php`, head/header/footer dùng chung và các component sản phẩm.

## Quy ước khi tiếp tục phát triển

| Loại thay đổi | Nơi thực hiện |
| --- | --- |
| Truy vấn, dữ liệu và quan hệ | Model |
| Đọc request, chọn luồng xử lý, xác thực và chọn View | Controller |
| HTML và hiển thị biến được truyền vào | View |
| Menu hoặc thành phần lặp giữa nhiều trang | Partial/component |
| Khai báo đường dẫn mới | routes/web.php |
| Kết nối và cấu hình môi trường | config và Core/Database |

View không gọi Model và không tự include tệp theo tham số URL. Nội dung thay đổi được xuất bằng `e()`. Dữ liệu bảng, danh mục, người dùng, đơn và bình luận được lấy trong Model/Controller, rồi lặp trong View.

## Những phần đã gom lại từ bản HTML

| Trước | Sau |
| --- | --- |
| 12 tệp chi tiết sản phẩm | Một `client/product.php`, dữ liệu nhận theo id |
| Nhiều tệp giỏ/thanh toán/xác nhận theo từng sản phẩm | Ba View chung do CartController điều phối |
| 13 tệp chỉnh sửa sản phẩm | Một `admin/products/form.php`, dùng cho cả thêm và sửa |
| Nhiều tệp chi tiết đơn | Một View khách hàng và một View quản trị |
| Sáu tệp hồ sơ người dùng | Một `admin/user.php` |
| Header/footer lặp trên từng trang | Layout + partial dùng chung |
| Thẻ sản phẩm lặp ở danh sách/gợi ý/yêu thích | Component product-card và product-grid |

Phần tìm kiếm đã được chuyển thành `Product::search()` trên dữ liệu mẫu; nhận tên, mã hoặc danh mục, hỗ trợ từ khóa không dấu và không phân biệt hoa thường. Các thao tác ghi vẫn là biểu mẫu xem trước như phạm vi ban đầu.

## Khi thay dữ liệu mẫu bằng MySQL

Model đang trả các mảng thuận tiện cho View. Có thể ánh xạ các trường SQL sang các khóa đó ngay trong Model, ví dụ `MaSanPham → id`, `TenSanPham → name`, `Gia → price`, `MaDanhMuc → cat`. Controller/View không cần biết câu SQL hay thông tin kết nối.

Các bộ lọc CSS dùng data attributes của thẻ sản phẩm và bảng. Giữ các khóa trạng thái nhất quán khi thay dữ liệu. Quy tắc hiển thị danh sách rỗng của bộ lọc khách hàng hiện được viết theo bộ sản phẩm mẫu; cần cập nhật hoặc chuyển lọc sang server khi thay đổi danh mục/dữ liệu thực.
