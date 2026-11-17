<main id="main" class="admin-login"><section class="admin-login-card"><a class="brand" href="<?= e(url('san-pham')) ?>" aria-label="BOLA — Trang chủ">BOLA<i>.</i></a><p class="eyebrow">KHÔNG GIAN QUẢN TRỊ</p>
<h1>Chào quản trị viên.</h1>
<p>Xem bộ giao diện quản lý cửa hàng BOLA.</p>
<form action="<?= e(front_url()) ?>" method="get">
<?= form_route('admin') ?><div class="field ">
<label for="admin-email">Email quản trị <span class="required">*</span></label><input id="admin-email" type="email" placeholder="admin@example.com" required>
</div>
<div class="field ">
<label for="admin-password">Mật khẩu <span class="required">*</span></label><input id="admin-password" type="password" placeholder="Tối thiểu 8 ký tự" required minlength="8">
</div>
<button class="button wide" type="submit">Xem giao diện quản trị <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></button>
</form>
<div class="preview-notice">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Chưa có xác thực hoặc kiểm tra quyền. Không nhập mật khẩu thật. Các trang admin là giao diện tĩnh.</span>
</div>
<a href="<?= e(url('san-pham')) ?>" class="admin-login-back">← Về cửa hàng BOLA</a></section>
</main>