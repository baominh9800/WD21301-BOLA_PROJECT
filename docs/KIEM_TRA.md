# Kiểm tra bản PHP MVC BOLA

Ngày kiểm tra: 16/11/2026. Thực hiện bằng PHP 8.4 CLI trên Linux với dữ liệu mẫu. Đây là kiểm tra refactor giao diện, chưa phải nghiệm thu một hệ thống bán hàng vận hành.

| Hạng mục | Kết quả |
| --- | --- |
| Cú pháp | 79 tệp PHP qua kiểm tra `php -l` |
| Render route | 108 trường hợp mô phỏng request qua PHP CLI, gồm 99 trang truy cập được qua các liên kết và biểu mẫu |
| Liên kết và tài nguyên | Không còn route, ảnh, CSS, anchor hoặc label trỏ đến đích thiếu trong kết quả render được kiểm tra |
| Danh sách/chi tiết | 12 sản phẩm công khai; BL013 bị ẩn và chỉ được đọc ở giao diện quản trị mẫu |
| Tìm kiếm Model | Không phân biệt hoa thường; tìm danh mục tiếng Việt không dấu; từ khóa lạ không tạo kết quả giả |
| Dữ liệu biến thể | Tổng tồn các biến thể bằng tồn từng sản phẩm mẫu |
| Đơn hàng mẫu | Tài khoản mẫu có hai đơn; tổng tiền và phí giao hàng được tính đúng theo dữ liệu mẫu |
| Trạng thái | Đơn đã giao không có lựa chọn quay về trạng thái trước |
| Bình luận | Model chỉ trả bình luận đã duyệt cho chi tiết sản phẩm |
| Route lỗi | Kiểm tra 404 cho route lạ, sản phẩm không tồn tại/bị ẩn và đơn ngoài tài khoản mẫu; 400 cho route kiểu mảng; 405 cho phương thức POST chưa triển khai |
| Xuất dữ liệu | Thử từ khóa chứa thẻ HTML để kiểm tra kết quả render không tạo script/thuộc tính sự kiện |
| Dữ liệu riêng tư trong demo | Trường mật khẩu không được gửi qua query string |

Chưa kiểm thử MySQL/PDO thực tế, đăng nhập/session, CSRF, nghiệp vụ ghi dữ liệu, thanh toán hoặc cấu hình Apache trên Windows. Hướng dẫn chạy Laragon/XAMPP nằm trong README.md.
