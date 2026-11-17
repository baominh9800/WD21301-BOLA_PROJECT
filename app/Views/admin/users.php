<div class="admin-page-head"><div>
<h1>Người dùng</h1>
<p>Xem hồ sơ và quản lý trạng thái tài khoản khách hàng.</p>
</div></div>
<section class="admin-panel"><div class="admin-toolbar"><div class="admin-tabs">
<input class="choice-input" type="radio" id="users-all" name="users" checked><label for="users-all">Tất cả <small>6</small></label><input class="choice-input" type="radio" id="users-live" name="users"><label for="users-live">Hoạt động <small>5</small></label><input class="choice-input" type="radio" id="users-locked" name="users"><label for="users-locked">Đã khóa <small>1</small></label>
</div></div>
<div class="admin-table-wrap"><table class="admin-table">
<thead><tr>
<th scope="col">Mã người dùng</th>
<th scope="col">Khách hàng</th>
<th scope="col">Vai trò</th>
<th scope="col">Ngày tạo</th>
<th scope="col">Trạng thái</th>
<th scope="col">Thao tác</th>
</tr></thead>
<tbody>
<?php foreach ($users as $user): ?><tr data-user-state="<?= $user['status'] ? 'live' : 'locked' ?>">
<td><?= 'ND' . str_pad((string) $user['id'], 3, '0', STR_PAD_LEFT) ?></td>
<td><div class="admin-product">
<span class="avatar">KH</span><span><strong><?= e($user['name']) ?></strong><small><?= e($user['email']) ?></small></span>
</div></td>
<td>Customer</td>
<td>10/11/2026</td>
<td><span class="<?= 'tag ' . ($user['status'] ? 'green' : 'gray') ?>"><?= $user['status'] ? 'Hoạt động' : 'Đã khóa' ?></span></td>
<td><div class="table-actions">
<a href="<?= e(url('admin/nguoi-dung/chi-tiet', ['id'=>$user['id']])) ?>" aria-label="Xem <?= e($user['name']) ?>"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z"></path><circle cx="12" cy="12" r="3"></circle></svg></a><a href="<?= '#khoa-' . $user['id'] ?>" aria-label="Đổi trạng thái <?= e($user['name']) ?>"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><rect x="5" y="10" width="14" height="12" rx="2"></rect><path d="M8 10V6a4 4 0 0 1 8 0v4M12 15v3"></path></svg></a>
</div></td>
</tr>
<?php endforeach; ?>
</tbody>
</table></div>
<div class="table-foot">
<span>Dữ liệu mẫu: 6 người dùng</span><span class="page-indicator" aria-current="page">1</span>
</div></section>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
<?php foreach ($users as $user): ?><section class="css-modal" id="khoa-<?= (int) $user['id'] ?>" role="dialog" aria-modal="true" aria-labelledby="khoa-<?= (int) $user['id'] ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="khoa-<?= (int) $user['id'] ?>-title"><?= $user['status'] ? 'Khóa tài khoản?' : 'Mở khóa tài khoản?' ?></h2>
<a class="modal-close" href="<?= e(url('admin/nguoi-dung')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body">
<p><?= e($user['name']) ?> (<?= e($user['email']) ?>) · Xem trước thay đổi trạng thái tài khoản. Chưa cập nhật dữ liệu.</p>
<div class="notice ">
<svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu không thay đổi hay xóa dữ liệu.</span>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin/nguoi-dung')) ?>">Quay lại</a><a class="button small" href="<?= e(url('admin/phan-hoi')) ?>">Xem trước thao tác</a>
</div>
</div>
</div></section>
<?php endforeach; ?>
