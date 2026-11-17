<div class="page-title">
<h1>Giỏ hàng của bạn</h1>
<p>Một lựa chọn mới. Thêm một hành trình.</p>
</div>
<div class="content-layout cart-layout">
<div>
<div class="cart-list">
<input type="checkbox" id="remove-cart" class="choice-input"><article class="cart-item"><img src="<?= e(asset($product['image'])) ?>" alt="<?= e($product['name']) ?>" width="110" height="110"><div>
<h2><a href="<?= e(url('san-pham/chi-tiet', ['id' => $product['id']])) ?>"><?= e($product['name']) ?></a></h2>
<p><?= e($colors[$product['colors'][0]]['name']) ?> / <?= e($product['size']) ?> · <?= e($product['code']) ?></p>
<label for="cart-quantity" class="sr-only">Số lượng mẫu</label><input id="cart-quantity" type="number" min="1" max="42" value="1" aria-describedby="quantity-help"><label class="remove-item" for="remove-cart">Xóa</label>
</div>
<p class="price"><?= money($product['price']) ?></p></article><div class="cart-empty">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 7h14l1 14H4L5 7Z"></path><path d="M8.5 8V6a3.5 3.5 0 0 1 7 0v2"></path></svg><h2>Giỏ hàng đang trống</h2>
<p>Khám phá một chiếc balo mới cho hành trình tiếp theo.</p>
<a class="button " href="<?= e(url('san-pham')) ?>">Khám phá bộ sưu tập</a>
</div>
</div>
<div class="cart-continue">
<a class="text-link" href="<?= e(url('san-pham')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4m6-6-6 6 6 6"></path></svg> Tiếp tục mua sắm</a><p id="quantity-help">Giá mẫu tính cho 1 sản phẩm. Thay đổi số lượng chưa được tính lại hoặc lưu.</p>
</div>
<div class="notice info">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Đây là giỏ hàng mẫu. Sản phẩm và số lượng chưa được lưu vào tài khoản.</span>
</div>
</div>
<aside class="panel summary-panel cart-summary"><h2>Thông tin đơn hàng</h2>
<?php partial('components/order-summary', ['subtotal' => $product['price'], 'shipping' => shipping_fee($product['price'])]); ?><a class="button wide" href="<?= e(url('thanh-toan', ['id' => $product['id']])) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg>Tiếp tục thanh toán</a><p class="tiny">Giá và phí trong bản giao diện là dữ liệu minh họa.</p></aside>
</div>
