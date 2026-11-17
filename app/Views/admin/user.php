<div class="admin-page-head">
<div>
<h1>Hồ sơ người dùng</h1>
<p>Thông tin minh họa theo bảng NguoiDung.</p>
</div>
<a class="button secondary" href="<?= e(url('admin/nguoi-dung')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4m6-6-6 6 6 6"></path></svg>Danh sách người dùng</a>
</div>
<section class="admin-panel"><div class="admin-panel-body">
<div class="admin-profile-head">
<span class="avatar">KH</span><div>
<h2><?= e($user['name']) ?></h2>
<p><?= e($user['email']) ?></p>
</div>
</div>
<dl class="admin-detail-list">
<dt>Mã người dùng</dt>
<dd><?= 'ND' . str_pad((string) $user['id'], 3, '0', STR_PAD_LEFT) ?></dd>
<dt>Vai trò</dt>
<dd>Customer</dd>
<dt>Trạng thái</dt>
<dd><span class="<?= 'tag ' . ($user['status'] ? 'green' : 'gray') ?>"><?= $user['status'] ? 'Hoạt động' : 'Đã khóa' ?></span></dd>
<dt>Số điện thoại</dt>
<dd>Chưa có dữ liệu</dd>
<dt>Ngày tạo</dt>
<dd>10/11/2026</dd>
</dl>
</div></section>
<div class="notice ">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Tên và email là dữ liệu hư cấu. Mật khẩu không hiển thị trong khu vực quản trị.</span>
</div>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
