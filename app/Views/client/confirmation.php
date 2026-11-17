<section class="state-card"><div class="state-symbol"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="19" rx="1"></rect><path d="M9 3V1h6v2M9 8h6M9 12h6M9 16h4"></path></svg></div>
<p class="eyebrow">BẢN XEM TRƯỚC</p>
<h1>Hành trình bắt đầu từ đây.</h1>
<p>Bạn đang xem giao diện xác nhận đơn hàng. Chưa có đơn hàng hay thanh toán thật được tạo.</p>
<div class="notice ">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Thông tin trên biểu mẫu không được lưu. Mã đơn bên dưới chỉ dùng minh họa giao diện.</span>
</div>
<div class="checkout-mini" style="text-align:left">
<img src="<?= e(asset($product['image'])) ?>" alt="<?= e($product['name']) ?>" width="68" height="68"><div>
<strong><?= e($product['name']) ?></strong><p>1 sản phẩm · <?= money($product['price']) ?></p>
<p>Mã minh họa: BOLA-MAU-<?= str_pad((string) $product['id'], 3, '0', STR_PAD_LEFT) ?></p>
</div>
</div>
<div class="state-actions">
<a class="button " href="<?= e(url('don-hang/chi-tiet', ['id' => '001'])) ?>">Xem giao diện theo dõi đơn</a><a class="button secondary" href="<?= e(url('san-pham')) ?>">Tiếp tục khám phá</a>
</div></section>
