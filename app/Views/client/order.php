<div class="account-layout">
<?php partial('partials/account-sidebar', ['accountActive' => $accountActive]); ?><section class="account-main"><h1>Đơn hàng #<?= 'BOLA-MAU-' . e($order['id']) ?></h1>
<p>Ngày đặt: 14/11/2026 · Đơn hàng minh họa.</p>
<span class="<?= 'tag ' . e($order['tone']) ?>"><?= e($order['status']) ?></span><ol class="timeline" aria-label="Tiến trình đơn hàng"><?php foreach (['Đã đặt hàng','Đã xác nhận','Đang giao','Đã giao'] as $i => $step): ?><li class="<?= $i < 3 || $order['status'] === 'Đã giao' ? 'done' : '' ?>"><?= e($step) ?><small><?= $i === 3 && $order['status'] !== 'Đã giao' ? 'Dự kiến 17/11' : 'Dữ liệu mẫu' ?></small></li><?php endforeach; ?></ol>
<div class="order-info">
<section class="panel"><h2>Thông tin người nhận</h2>
<p>Khách hàng mẫu<br>Địa chỉ và số điện thoại sẽ hiển thị từ đơn hàng thật khi tích hợp dữ liệu.</p></section><section class="panel"><h2>Thanh toán</h2>
<p>Thanh toán khi nhận hàng (COD)<br>Trạng thái: <?= e($order['payment_status']) ?></p></section>
</div>
<div class="panel">
<div class="checkout-mini">
<img src="<?= e(asset($order['product']['image'])) ?>" alt="<?= e($order['product']['name']) ?>" width="68" height="68"><div>
<strong><?= e($order['product']['name']) ?></strong><p><?= e($colors[$order['product']['colors'][0]]['name']) ?> / <?= e($order['product']['size']) ?> · Số lượng: <?= $order['quantity'] ?></p>
<p><?= money($order['subtotal']) ?></p>
</div>
</div>
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
</div>
<a class="text-link space-top" href="<?= e(url('don-hang')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4m6-6-6 6 6 6"></path></svg> Trở lại danh sách đơn hàng</a></section>
</div>
