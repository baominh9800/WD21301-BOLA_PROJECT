<div class="admin-page-head"><div>
<h1>Đơn hàng</h1>
<p>Xem, xác nhận và theo dõi tiến trình xử lý từng đơn.</p>
</div></div>
<div class="stats-row">
<article class="stat-card"><div class="stat-top">
<span>Tổng đơn hàng</span><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="19" rx="1"></rect><path d="M9 3V1h6v2M9 8h6M9 12h6M9 16h4"></path></svg>
</div>
<p class="stat-number">05<small>Đơn minh họa</small></p></article><article class="stat-card"><div class="stat-top">
<span>Chờ xác nhận</span><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 6v6l4 2"></path></svg>
</div>
<p class="stat-number">01<small>Cần tiếp nhận</small></p></article><article class="stat-card"><div class="stat-top">
<span>Đang giao</span><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 5h13v12H2zM15 10h4l3 4v3h-7"></path><circle cx="6" cy="18" r="2"></circle><circle cx="18" cy="18" r="2"></circle></svg>
</div>
<p class="stat-number">01<small>Đang vận chuyển</small></p></article>
</div>
<section class="admin-panel"><div class="admin-toolbar"><div class="admin-tabs">
<input class="choice-input" type="radio" id="orders-all" name="orders" checked><label for="orders-all">Tất cả <small>5</small></label><input class="choice-input" type="radio" id="orders-pending" name="orders"><label for="orders-pending">Chờ xác nhận <small>1</small></label><input class="choice-input" type="radio" id="orders-transit" name="orders"><label for="orders-transit">Đang giao <small>1</small></label><input class="choice-input" type="radio" id="orders-delivered" name="orders"><label for="orders-delivered">Đã giao <small>1</small></label>
</div></div>
<div class="admin-table-wrap"><table class="admin-table">
<thead><tr>
<th scope="col">Mã đơn hàng</th>
<th scope="col">Khách hàng</th>
<th scope="col">Ngày đặt</th>
<th scope="col">Tổng tiền</th>
<th scope="col">Trạng thái đơn</th>
<th scope="col">Thanh toán</th>
<th scope="col">Thao tác</th>
</tr></thead>
<tbody>
<?php foreach ($orders as $order): ?><tr data-order-state="<?= e($order['filter_key']) ?>">
<td><a href="<?= e(url('admin/don-hang/chi-tiet', ['id'=>$order['id']])) ?>"><strong>#BOLA-MAU-<?= e($order['id']) ?></strong></a></td>
<td><?= e($order['customer']['name']) ?><br><small class="muted">Tài khoản minh họa</small></td>
<td><?= e($order['date']) ?></td>
<td class="price"><?= money($order['total']) ?></td>
<td><span class="<?= 'tag ' . (e($order['tone'])) ?>"><?= e($order['status']) ?></span></td>
<td><span class="<?= 'tag ' . ($order['payment_status'] === 'Đã thanh toán' ? 'green' : 'gray') ?>"><?= e($order['payment_status']) ?></span></td>
<td><div class="table-actions"><a href="<?= e(url('admin/don-hang/chi-tiet', ['id'=>$order['id']])) ?>" aria-label="Xem đơn 001"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z"></path><circle cx="12" cy="12" r="3"></circle></svg>Chi tiết</a></div></td>
</tr>
<?php endforeach; ?>
</tbody>
</table></div>
<div class="table-foot">
<span>Dữ liệu mẫu: 5 đơn hàng</span><span class="page-indicator" aria-current="page">1</span>
</div></section>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
