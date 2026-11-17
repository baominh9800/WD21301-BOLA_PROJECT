# BOLA PHP MVC

Bản này tách bộ giao diện website bán balo BOLA thành Model, View và Controller bằng PHP thuần. Giao diện HTML, CSS và bộ ảnh của bản trước được giữ lại; các phần lặp được gom thành layout, partial và component.

Mọi yêu cầu vào `public/index.php`. Router tìm Controller trong `routes/web.php`; Controller gọi Model lấy dữ liệu và truyền sang View. Model hiện đọc dữ liệu mẫu từ `data/seed.json`, nên có thể xem toàn bộ giao diện ngay mà chưa cần MySQL.

## Chạy bằng Laragon trên Windows

1. Dùng Laragon có PHP **8.1 trở lên** và bật Apache bằng **Start All**.
2. Giải nén file ZIP. Chép nguyên thư mục `BOLA_MVC` vào `C:\laragon\www\`.
3. Mở trình duyệt, nhập `http://localhost/BOLA_MVC/public/index.php`.
4. Trang admin: `http://localhost/BOLA_MVC/public/index.php?route=admin`.
5. Trong Laragon, mở **Terminal**, vào thư mục dự án để dùng lệnh PHP khi cần.

Nếu bạn đổi tên thư mục, thay `BOLA_MVC` trong địa chỉ tương ứng. Hàm `url()` và `asset()` tự lấy đường dẫn thư mục từ request.

## Chạy bằng XAMPP

1. Chép thư mục `BOLA_MVC` vào `C:\xampp\htdocs\`.
2. Mở XAMPP Control Panel, bấm **Start** tại Apache.
3. Mở `http://localhost/BOLA_MVC/public/index.php`.
4. Admin dùng đường dẫn `?route=admin` như phần Laragon.

MySQL chưa cần bật để xem bản mẫu này. Không mở PHP bằng cách nhấp đúp tệp hoặc dùng VS Code Live Server; hãy truy cập qua máy chủ PHP.

## Chạy bằng PHP có sẵn trong terminal

Mở terminal tại thư mục `BOLA_MVC` và chạy:

```bash
php -S localhost:8000 -t public
```

Sau đó mở `http://localhost:8000/index.php`. Trang admin là `http://localhost:8000/index.php?route=admin`.

Khi dùng virtual host, đặt DocumentRoot tại thư mục `public/`. Các thư mục mã nguồn và dữ liệu nằm bên ngoài thư mục công khai. File `.htaccess` bổ sung các quy tắc cho Apache khi chạy từ thư mục dự án.

## Các thư mục và trách nhiệm

| Vị trí | Trách nhiệm |
| --- | --- |
| `public/index.php` | Điểm vào ứng dụng, gọi Router và xử lý lỗi ngoài cùng |
| `public/assets/` | CSS, ảnh, favicon; phần tài nguyên công khai |
| `bootstrap/app.php` | Định nghĩa thư mục gốc, autoload các lớp và nạp cấu hình/helper |
| `routes/web.php` | Danh sách route và cặp Controller/phương thức được phép gọi |
| `app/Core/` | Router, Controller nền, View renderer, kho dữ liệu mẫu và lớp kết nối PDO |
| `app/Controllers/` | Điều phối các trang khách hàng |
| `app/Controllers/Admin/` | Điều phối sản phẩm, danh mục, biến thể, đơn, người dùng và bình luận |
| `app/Models/` | Đọc và tìm dữ liệu, quan hệ sản phẩm/biến thể/đơn và các quy tắc trạng thái mẫu |
| `app/Views/client/` | Nội dung giao diện khách hàng |
| `app/Views/admin/` | Nội dung giao diện quản trị |
| `app/Views/layouts/` | Khung trang khách hàng, quản trị và đăng nhập quản trị |
| `app/Views/partials/` | Head, header, footer, menu admin và menu tài khoản |
| `app/Views/components/` | Thẻ sản phẩm, lưới sản phẩm, sản phẩm trong bảng admin và tổng tiền |
| `app/Support/` | Hàm hỗ trợ URL, thoát HTML, định dạng tiền và bộ biểu tượng |
| `config/app.php` | Tên ứng dụng, đường dẫn, phí giao hàng mẫu |
| `config/database.php` | Cấu hình PDO/MySQL cho bước phát triển tiếp theo |
| `data/seed.json` | Dữ liệu mẫu dùng chung, không nằm trong public |
| `tests/` | Các kiểm tra Model và bộ chạy render route qua PHP CLI |
| `docs/` | Giải thích MVC, ánh xạ các trang, ghi chú ERD và kết quả kiểm tra |

## Các đường dẫn thường dùng

Các ví dụ sau tính từ `public/index.php`:

| URL | Controller và View chính |
| --- | --- |
| `?route=trang-chu` | CatalogController → client/home |
| `?route=san-pham` | CatalogController → client/catalog |
| `?route=san-pham/chi-tiet&id=2` | CatalogController → client/product |
| `?route=tim-kiem&q=laptop` | CatalogController → Product::search → client/search |
| `?route=gio-hang&id=2` | CartController → client/cart |
| `?route=thanh-toan&id=2` | CartController → client/checkout |
| `?route=tai-khoan` | AccountController → client/account |
| `?route=don-hang/chi-tiet&id=001` | AccountController → client/order |
| `?route=admin` | Admin/ProductController → admin/products/index |
| `?route=admin/san-pham/them` | Admin/ProductController → admin/products/form |
| `?route=admin/san-pham/sua&id=2` | Cũng dùng admin/products/form, nhận sản phẩm cần sửa |
| `?route=admin/danh-muc` | Admin/CategoryController → admin/categories |
| `?route=admin/bien-the` | Admin/VariantController → admin/variants |
| `?route=admin/don-hang` | Admin/OrderController → admin/orders |
| `?route=admin/nguoi-dung` | Admin/UserController → admin/users |
| `?route=admin/binh-luan` | Admin/CommentController → admin/comments |

## Cách sửa một phần cụ thể

- Sửa menu khách hàng ở `app/Views/partials/header.php`; chân trang ở `footer.php`. Các trang khác dùng chung các phần này.
- Sửa menu admin ở `app/Views/partials/admin-sidebar.php`.
- Sửa một thẻ sản phẩm ở `app/Views/components/product-card.php`; danh sách, gợi ý và yêu thích đều dùng lại.
- Sửa nội dung chi tiết ở `app/Views/client/product.php`; 12 sản phẩm cùng dùng View này và nhận dữ liệu theo `id`.
- Sửa biểu mẫu thêm/sửa sản phẩm ở `app/Views/admin/products/form.php`.
- Sửa dữ liệu hiển thị tại `data/seed.json` hoặc viết truy vấn trong Model tương ứng.
- Đổi màu sắc, khoảng cách và bố cục bằng `public/assets/css/style.css`, `admin.css`.
- Thêm trang mới bằng cách thêm phương thức Controller, tạo View và khai báo route trong `routes/web.php`.

Khi tạo liên kết trong View, dùng `e(url('ten-route', ['id' => ...]))`. Khi tạo biểu mẫu GET, dùng `action="<?= e(front_url()) ?>"` và `form_route('ten-route')` để giữ tham số route khi gửi. URL query viết trực tiếp trong thuộc tính action của biểu mẫu GET có thể bị trình duyệt thay thế.

## Phạm vi hiện tại

Đã có Router, autoload, Model dữ liệu mẫu, Controller, View/layout dùng chung, tìm kiếm qua Model, route 404 và các màn hình khách hàng/admin của bản trước. Bản PHP render giao diện phía máy chủ; giao diện tiếp tục dùng CSS thuần và không có JavaScript.

Đây là **bản cắt giao diện theo MVC**, chưa phải ứng dụng bán hàng có đầy đủ nghiệp vụ:

- Tài khoản khách hàng luôn là người dùng mẫu Minh Anh, chưa có session/đăng nhập thật.
- Admin có thể mở trực tiếp vì chưa có xác thực hoặc phân quyền vận hành.
- Chưa lưu giỏ, yêu thích, bình luận, đơn hàng hoặc cập nhật dữ liệu từ biểu mẫu.
- Trường số lượng chưa tự tính lại tổng tiền; giỏ và xác nhận tính theo một sản phẩm mẫu. Màu/size chưa truyền sang giỏ.
- Không thực hiện thanh toán, gửi email hoặc tải ảnh lên máy chủ.
- Các trường riêng tư không có `name` để tránh gửi thông tin cá nhân qua query string khi thử giao diện. Các nút thao tác ghi “Xem trước”.
- Model chưa thực hiện truy vấn MySQL. Lớp Database/PDO là điểm nối được chuẩn bị, chưa được gọi trong chế độ dữ liệu mẫu. Chưa có schema SQL hoặc ca kiểm thử MySQL.

Không dùng mật khẩu thật để thử các biểu mẫu. Tên, email, sản phẩm, giá và chính sách đều là nội dung giả lập.

## Bước nối MySQL

1. Thống nhất các điểm ERD nêu trong `docs/ERD.md`.
2. Tạo cơ sở dữ liệu và cấu hình `config/database.php` hoặc biến môi trường `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, `DB_PASS`.
3. Bật extension `pdo_mysql` trong PHP. Cấu hình này chỉ cần khi thực sự dùng MySQL.
4. Triển khai truy vấn trong các Model bằng `App\Core\Database::connection()`; giữ kiểu dữ liệu trả về cho View nhất quán.
5. Bổ sung các route POST, kiểm tra đầu vào phía máy chủ, session, quyền Customer/Admin và CSRF cho các thao tác thay đổi dữ liệu.
6. Tạo đơn/trừ tồn trong transaction, kiểm tra lại giá và xác minh thanh toán ở server trước khi vận hành.

Không chuyển thao tác ghi dữ liệu sang GET. Các route GET của bản mẫu chỉ đọc dữ liệu hoặc hiển thị biểu mẫu.

## Kiểm tra

```bash
php tests/models.php
php tests/render.php "route=san-pham/chi-tiet&id=2"
```

Kết quả Model phải kết thúc bằng `All model checks passed.`. Bộ render nhận query string, xuất HTML ra STDOUT và mã trạng thái mô phỏng ra STDERR để kiểm tra Controller/View mà không cần máy chủ HTTP.

Các ghi nhận chi tiết ở `docs/KIEM_TRA.md`. Chưa nghiệm thu cơ sở dữ liệu, máy chủ Windows hoặc nghiệp vụ ghi dữ liệu.

## Ảnh tham khảo

Ảnh sản phẩm tham khảo MWC theo trang người dùng cung cấp: https://mwc.com.vn/collections/balo---tui. Nguồn từng ảnh ở `docs/nguon-anh.json`. BOLA là đồ án học tập và không đại diện cho MWC.
