<section class="state-card"><div class="state-symbol"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="1"></rect><path d="m2 5 10 8L22 5"></path></svg></div>
<h1>Quên mật khẩu?</h1>
<p>Nhập email để xem biểu mẫu khôi phục tài khoản.</p>
<form action="<?= e(front_url()) ?>" method="get" class="form-grid">
<?= form_route('phan-hoi') ?><div class="field full">
<label for="recovery-email">Email đăng ký <span class="required">*</span></label><input id="recovery-email" type="email" placeholder="ban@example.com" required>
</div>
<button type="submit" class="button wide" style="grid-column:1/-1">Xem trước yêu cầu</button>
</form>
<p class="form-note">Bản mẫu không gửi email và không thay đổi mật khẩu.</p></section>
