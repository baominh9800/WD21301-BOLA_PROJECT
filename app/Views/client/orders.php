<div class="account-layout">
<?php partial('partials/account-sidebar', ['accountActive' => $accountActive]); ?><section class="account-main"><h1>Đơn hàng của tôi</h1>
<p>Theo dõi những hành trình đang đến gần.</p>
<?php foreach ($orders as $order): ?><article class="order-card"><div class="order-card-head">
<span><strong>#<?= 'BOLA-MAU-' . e($order['id']) ?></strong>  ·  14/11/2026</span><span class="<?= 'tag ' . e($order['tone']) ?>"><?= e($order['status']) ?></span>
</div>
<div class="order-card-body">
<img src="<?= e(asset($order['product']['image'])) ?>" alt="<?= e($order['product']['name']) ?>" width="85" height="85"><div>
<h2><?= e($order['product']['name']) ?></h2>
<p><?= e($colors[$order['product']['colors'][0]]['name']) ?> / <?= e($order['product']['size']) ?> · Số lượng: <?= $order['quantity'] ?></p>
</div>
<span class="price"><?= money($order['subtotal']) ?></span>
</div>
<div class="order-card-foot">
<span>Đơn minh họa · <?= money($order['total']) ?></span><a class="button secondary small" href="<?= e(url('don-hang/chi-tiet', ['id' => $order['id']])) ?>">Xem chi tiết</a>
</div></article>
<?php endforeach; ?></section>
</div>
