<div class="auth-wrap">
<div class="auth-art">
<img src="<?= e(asset('images/balo-03.jpg')) ?>" alt="Balo trên phố" width="640" height="640"><div class="auth-art-copy">
<h2>Chuyện của bạn.<br>BOLA đồng hành.</h2>
<p>Lưu lại những điều bạn thích.</p>
</div>
</div>
<section class="auth-form"><p class="eyebrow">BOLA / TÀI KHOẢN</p>
<h1>Chào bạn trở lại</h1>
<p>Chiếc balo yêu thích đang chờ bạn.</p>
<form action="<?= e(front_url()) ?>" method="get">
<?= form_route('tai-khoan') ?><div class="field ">
<label for="email">Email <span class="required">*</span></label><input id="email" type="email" placeholder="ban@example.com" required autocomplete="email">
</div>
<div class="field ">
<label for="password">Mật khẩu <span class="required">*</span></label><input id="password" type="password" placeholder="Tối thiểu 8 ký tự" required minlength="8" autocomplete="current-password">
</div>
<div class="auth-extras">
<label class="checkline"><input type="checkbox">Ghi nhớ lựa chọn mẫu</label><a href="<?= e(url('quen-mat-khau')) ?>">Quên mật khẩu?</a>
</div>
<button class="button wide" type="submit">Xem giao diện tài khoản <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></button>
</form>
<div class="preview-notice">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu: chưa tạo tài khoản hay xác thực. Không dùng mật khẩu thật để thử giao diện.</span>
</div>
<div class="auth-switch">Bạn mới đến BOLA? <a href="<?= e(url('dang-ky')) ?>">Tạo tài khoản</a>
</div></section>
</div>
