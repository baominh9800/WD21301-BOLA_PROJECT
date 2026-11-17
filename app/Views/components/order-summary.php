<div class="summary-line"><span>Tạm tính</span><span><?= money($subtotal) ?></span></div>
<div class="summary-line"><span>Phí vận chuyển mẫu</span><span><?= $shipping > 0 ? money($shipping) : 'Miễn phí' ?></span></div>
<div class="summary-line total"><span>Tổng cộng</span><span><?= money($subtotal + $shipping) ?></span></div>
