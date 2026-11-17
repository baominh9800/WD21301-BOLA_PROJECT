<div class="account-layout">
<?php partial('partials/account-sidebar', ['accountActive' => $accountActive]); ?><section class="account-main"><h1>Thông tin tài khoản</h1>
<p>Quản lý thông tin cá nhân của bạn.</p>
<form class="panel" action="<?= e(front_url()) ?>" method="get">
<?= form_route('phan-hoi') ?><div class="form-grid">
<div class="field ">
<label for="profile-name">Họ và tên <span class="required">*</span></label><input id="profile-name" type="text" placeholder="" required value="<?= e($customer['name']) ?>">
</div>
<div class="field ">
<label for="profile-email">Email <span class="required">*</span></label><input id="profile-email" type="email" placeholder="" required value="<?= e($customer['email']) ?>">
</div>
<div class="field ">
<label for="profile-phone">Số điện thoại </label><input id="profile-phone" type="tel" placeholder="" pattern="0[0-9]{9}">
</div>
<div class="field full"><div class="notice ">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Minh Anh là tài khoản hư cấu dùng minh họa. Chỉnh sửa chưa được lưu.</span>
</div></div>
</div>
<button class="button space-top" type="submit">Xem trước cập nhật</button>
</form></section>
</div>
