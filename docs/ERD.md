# Ghi chú ERD trước khi nối MySQL

Bản MVC được cắt từ giao diện hiện có, chưa tạo schema SQL hoặc thay đổi file báo cáo gốc.

- Hình ERD mới có **16 bảng** gồm YeuThich, trong khi DOCX còn ghi 15 bảng và nói thiếu bảng này. Cần đồng bộ hai nguồn.
- BienTheSP thuộc SanPham. Liên kết MaGioHang trong BienTheSP cần được xem lại; ChiTietGioHang cần định danh MaBienThe khi mua theo màu/size.
- ChiTietDonHang cần giữ biến thể hoặc thông tin màu/size đã chốt, cùng đơn giá tại lúc đặt.
- ColorID và MauSac trong BienTheSP cần thống nhất nguồn dữ liệu màu.
- Tên bảng PhuocThucThanhToan có lỗi gõ; nên thống nhất PhuongThucThanhToan nếu chưa có mã nguồn phụ thuộc.
- Kiểm tra khóa ngoại HinhAnhSp.MaSanPham → SanPham.MaSanPham và quy tắc ảnh đại diện.
- Ràng buộc duy nhất tổ hợp sản phẩm–size–màu; kiểm tra tồn không âm; giữ lịch sử các biến thể đã có giao dịch.
- Tách trạng thái đơn với trạng thái thanh toán; xác nhận đơn không đồng nghĩa đã nhận tiền.

Các Model trong bản này đọc JSON mẫu và trả dữ liệu cho Controller. Cấu hình PDO đã được chuẩn bị để bạn nối truy vấn sau khi thống nhất các quan hệ trên.
