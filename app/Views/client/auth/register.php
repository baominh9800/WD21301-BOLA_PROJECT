<div class="auth-wrap">
<div class="auth-art">
<img src="<?= e(asset('images/balo-03.jpg')) ?>" alt="Balo trên phố" width="640" height="640"><div class="auth-art-copy">
<h2>Chuyện của bạn.<br>BOLA đồng hành.</h2>
<p>Lưu lại những điều bạn thích.</p>
</div>
</div>
<section class="auth-form"><p class="eyebrow">BOLA / TÀI KHOẢN</p>
<h1>Tạo tài khoản</h1>
<p>Bắt đầu hành trình của bạn cùng BOLA.</p>
<form action="<?= e(front_url()) ?>" method="get">
<?= form_route('tai-khoan') ?><div class="field ">
<label for="fullname">Họ và tên <span class="required">*</span></label><input id="fullname" type="text" placeholder="Tên của bạn" required autocomplete="name">
</div>
<div class="field ">
<label for="email">Email <span class="required">*</span></label><input id="email" type="email" placeholder="ban@example.com" required autocomplete="email">
</div>
<div class="field ">
<label for="password">Mật khẩu <span class="required">*</span></label><input id="password" type="password" placeholder="Tối thiểu 8 ký tự" required minlength="8" autocomplete="new-password">
</div>
<label class="checkline"><input type="checkbox" required><span>Tôi hiểu đây là biểu mẫu tài khoản minh họa.</span></label><button class="button wide" type="submit">Xem giao diện tài khoản <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></button>
</form>
<div class="preview-notice">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu: chưa tạo tài khoản hay xác thực. Không dùng mật khẩu thật để thử giao diện.</span>
</div>
<div class="auth-switch">Đã có tài khoản? <a href="<?= e(url('dang-nhap')) ?>">Đăng nhập</a>
</div></section>
</div>
