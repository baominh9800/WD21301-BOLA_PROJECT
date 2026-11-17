<div class="admin-page-head">
<div>
<h1>#<?= 'BOLA-MAU-' . e($order['id']) ?></h1>
<p>Đơn hàng mẫu · Ngày đặt 14/11/2026</p>
</div>
<a class="button secondary" href="<?= e(url('admin/don-hang')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4m6-6-6 6 6 6"></path></svg>Danh sách đơn</a>
</div>
<div class="admin-two-col">
<div>
<section class="admin-panel"><div class="admin-panel-title">
<h2>Sản phẩm trong đơn</h2>
<span class="<?= 'tag ' . (e($order['tone'])) ?>"><?= e($order['status']) ?></span>
</div>
<div class="admin-table-wrap"><table class="admin-table">
<thead><tr>
<th scope="col">Sản phẩm</th>
<th scope="col">Số lượng</th>
<th scope="col">Đơn giá</th>
<th scope="col">Thành tiền</th>
</tr></thead>
<tbody><tr>
<td><?php partial('components/admin-product', ['p'=>$order['product']]); ?></td>
<td>1</td>
<td><?= money($order['subtotal']) ?></td>
<td><?= money($order['subtotal']) ?></td>
</tr></tbody>
</table></div>
<div class="admin-panel-body admin-summary">
<div class="summary-line">
<span>Tạm tính</span><span><?= money($order['subtotal']) ?></span>
</div>
<div class="summary-line">
<span>Phí vận chuyển mẫu</span><span><?= money($order['shipping']) ?></span>
</div>
<div class="summary-line total">
<span>Tổng cộng</span><span><?= money($order['total']) ?></span>
</div>
<p class="tiny">Giá và phí trong bản giao diện là dữ liệu minh họa.</p>
</div></section><section class="admin-panel"><div class="admin-panel-title"><h2>Thông tin giao hàng</h2></div>
<div class="admin-panel-body"><div class="admin-section-grid">
<div>
<h3><?= e($order['customer']['name']) ?></h3>
<p>Tên khách hàng hư cấu.<br>Địa chỉ và số điện thoại chưa được cung cấp trong dữ liệu mẫu.</p>
</div>
<div>
<h3>Thông tin đặt hàng</h3>
<p>Ngày đặt: 14/11/2026<br>Ghi chú: Giao trong giờ hành chính — dữ liệu mẫu.</p>
</div>
</div></div></section>
</div>
<aside><section class="admin-panel"><div class="admin-panel-title"><h2>Cập nhật trạng thái</h2></div>
<form action="<?= e(front_url()) ?>" method="get">
<?= form_route('admin/phan-hoi') ?><div class="admin-panel-body">
<div class="field">
<label for="MaTrangThai">Trạng thái đơn hàng</label><select id="MaTrangThai"><?php foreach ($nextStatuses as $status): ?><option><?= e($status) ?></option><?php endforeach; ?></select><small>Chỉ hiển thị các bước chuyển hợp lệ tiếp theo trong quy trình mẫu.</small>
</div>
<button type="submit" class="button wide space-top">Xem trước cập nhật</button>
</div>
</form></section><section class="admin-panel"><div class="admin-panel-title"><h2>Thanh toán</h2></div>
<div class="admin-panel-body">
<p style="font-size:11px;margin-bottom:12px">Thanh toán khi nhận hàng (COD)</p>
<span class="<?= 'tag ' . ($order['payment_status'] === 'Đã thanh toán' ? 'green' : 'gray') ?>"><?= e($order['payment_status']) ?></span><p class="form-note">Không tự đánh dấu thanh toán thành công khi chưa có xác minh.</p>
</div></section></aside>
</div>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
