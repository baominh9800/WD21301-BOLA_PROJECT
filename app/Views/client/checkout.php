<div class="page-title"><h1>Thông tin thanh toán</h1></div>
<nav class="steps" aria-label="Các bước mua hàng"><a href="<?= e(url('gio-hang', ['id' => $product['id']])) ?>">Giỏ hàng</a><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m9 5 7 7-7 7"></path></svg><strong>Thông tin &amp; thanh toán</strong><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m9 5 7 7-7 7"></path></svg><span class="muted">Xem trước đơn</span></nav>
<form action="<?= e(front_url()) ?>" method="get" class="content-layout">
<?= form_route('xac-nhan', ['id' => $product['id']]) ?><div>
<section class="checkout-section"><h2>
<span class="step-num">1</span>Thông tin giao hàng</h2>
<p class="muted" style="font-size:11px;margin-bottom:20px">Đã có tài khoản? <a href="<?= e(url('dang-nhap')) ?>" style="text-decoration:underline">Đăng nhập</a></p>
<div class="form-grid">
<div class="field ">
<label for="recipient">Họ và tên người nhận <span class="required">*</span></label><input id="recipient" type="text" placeholder="Nhập họ tên" required autocomplete="shipping name">
</div>
<div class="field ">
<label for="phone">Số điện thoại <span class="required">*</span></label><input id="phone" type="tel" placeholder="Nhập số điện thoại" required autocomplete="shipping tel" pattern="0[0-9]{9}" title="Nhập số điện thoại gồm 10 chữ số, bắt đầu bằng 0.">
</div>
<div class="field full">
<label for="address">Địa chỉ nhận hàng <span class="required">*</span></label><input id="address" type="text" placeholder="Số nhà, tên đường, phường/xã, tỉnh/thành phố" required autocomplete="shipping street-address">
</div>
<div class="field full">
<label for="order-note">Ghi chú đơn hàng</label><textarea id="order-note" maxlength="500" placeholder="Thời gian nhận hàng hoặc lưu ý cho cửa hàng…"></textarea>
</div>
</div></section><section class="checkout-section"><h2>
<span class="step-num">2</span>Phương thức thanh toán</h2>
<fieldset>
<legend class="sr-only">Chọn phương thức thanh toán</legend>
<label class="radio-card"><input type="radio" name="PhuongThucHienThi" value="cod" checked><span><strong>Thanh toán khi nhận hàng (COD)</strong><small>Thanh toán cho đơn vị vận chuyển khi nhận hàng.</small></span></label><label class="radio-card"><input type="radio" name="PhuongThucHienThi" value="bank"><span><strong>Chuyển khoản ngân hàng</strong><small>Thông tin chuyển khoản sẽ do cửa hàng cung cấp khi xác nhận đơn thật.</small></span></label>
</fieldset></section><div class="notice ">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Biểu mẫu chỉ dùng xem trước. Thông tin người nhận không được gửi đến máy chủ; chưa tạo đơn hoặc thực hiện giao dịch.</span>
</div>
<label class="checkline space-top"><input type="checkbox" required><span>Tôi hiểu đây là bản xem trước đơn hàng của dự án.</span></label>
</div>
<aside class="panel summary-panel"><h2>Đơn hàng của bạn</h2>
<div class="checkout-mini">
<img src="<?= e(asset($product['image'])) ?>" alt="<?= e($product['name']) ?>" width="68" height="68"><div>
<strong><?= e($product['name']) ?></strong><p><?= e($colors[$product['colors'][0]]['name']) ?> / <?= e($product['size']) ?> · <?= e($product['code']) ?></p>
<p>Số lượng: 1</p>
</div>
</div>
<?php partial('components/order-summary', ['subtotal' => $product['price'], 'shipping' => shipping_fee($product['price'])]); ?><button type="submit" class="button wide">Xem trước đơn hàng <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></button><p class="tiny">Giá và phí trong bản giao diện là dữ liệu minh họa.</p>
<a class="text-link space-top" href="<?= e(url('gio-hang', ['id' => $product['id']])) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4m6-6-6 6 6 6"></path></svg> Quay lại giỏ hàng</a></aside>
</form>
