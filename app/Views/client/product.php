<div class="detail-layout">
<div class="gallery">
<div class="gallery-thumbs">
<a href="#anh-san-pham" aria-label="Xem ảnh chính"><img src="<?= e(asset($product['image'])) ?>" alt="Ảnh thu nhỏ <?= e($product['name']) ?>" width="80" height="80"></a><a href="#thong-so" aria-label="Xem thông số"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg></a>
</div>
<div>
<div class="gallery-main" id="anh-san-pham">
<img src="<?= e(asset($product['image'])) ?>" alt="<?= e($product['name']) ?> — ảnh màu <?= e($colors[$product['colors'][0]]['name']) ?>" width="640" height="640"><?php if ($product['badge'] !== ''): ?><span class="product-tag"><?= e($product['badge']) ?></span><?php endif; ?>
</div>
<p class="gallery-caption">Ảnh minh họa sản phẩm · Nguồn MWC</p>
</div>
</div>
<section class="product-detail"><p class="eyebrow"><?= e($product['category_name']) ?></p>
<h1><?= e($product['name']) ?><br><?= e($product['sub']) ?></h1>
<div class="detail-meta">
<span>Mã sản phẩm: <?= e($product['code']) ?></span><span class="tag green">Còn hàng</span>
</div>
<p class="detail-price"><?= money($product['price']) ?></p>
<p class="detail-desc">Form dáng gọn gàng, dễ phối đồ và đủ chỗ cho những vật dụng cần thiết. Thiết kế nhiều ngăn giúp bạn sắp xếp đồ dùng ngăn nắp, sẵn sàng cho một ngày năng động.</p>
<fieldset class="product-options">
<legend>Màu sắc</legend>
<div class="option-row"><?php foreach ($product['colors'] as $i => $color): ?><input class="choice-input" type="radio" id="detail-color-<?= e($color) ?>" name="color" <?= $i === 0 ? 'checked' : '' ?>><label for="detail-color-<?= e($color) ?>"><span class="swatch" style="--swatch:<?= e($colors[$color]['hex']) ?>"></span><?= e($colors[$color]['name']) ?></label><?php endforeach; ?></div>
</fieldset>
<fieldset class="product-options">
<legend>Kích thước</legend>
<div class="option-row">
<input class="choice-input" type="radio" id="detail-size" name="size" checked><label for="detail-size"><?= e($product['size']) ?></label>
</div>
</fieldset>
<p class="muted" style="font-size:10px">Có sẵn <?= (int) $product['stock'] ?> sản phẩm trong dữ liệu mẫu.</p>
<div class="buy-row"><a class="button wide" href="<?= e(url('gio-hang', ['id' => $product['id']])) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 7h14l1 14H4L5 7Z"></path><path d="M8.5 8V6a3.5 3.5 0 0 1 7 0v2"></path></svg>Xem giỏ hàng mẫu</a></div>
<a href="<?= e(url('yeu-thich')) ?>" class="text-link space-top"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.8 4.6a5.4 5.4 0 0 0-7.6 0L12 5.8l-1.2-1.2a5.4 5.4 0 0 0-7.6 7.6L12 21l8.8-8.8a5.4 5.4 0 0 0 0-7.6Z"></path></svg> Xem danh sách yêu thích</a><div class="detail-policy">
<div>
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 5h13v12H2zM15 10h4l3 4v3h-7"></path><circle cx="6" cy="18" r="2"></circle><circle cx="18" cy="18" r="2"></circle></svg>Giao hàng toàn quốc</div>
<div>
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 8h10a7 7 0 1 1 0 14M4 8l5-5M4 8l5 5"></path></svg>Đổi trả trong 7 ngày</div>
</div>
<div class="notice ">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Lựa chọn màu/size chỉ hiển thị trong trang này. Giỏ hàng mẫu có sẵn 1 sản phẩm để xem luồng mua hàng.</span>
</div>
<details class="detail-accordion space-top" open><summary>Thông tin sản phẩm</summary><div>Thiết kế dành cho cả nam và nữ. Dây đeo có thể điều chỉnh. Các thông số trong bản giao diện là dữ liệu mẫu của dự án.</div></details><details class="detail-accordion"><summary>Hướng dẫn bảo quản</summary><div>Lau bằng khăn mềm, tránh chất tẩy mạnh. Phơi nơi thoáng mát và giữ sản phẩm khô ráo trước khi cất.</div></details></section>
</div>
<div class="detail-tabs">
<section id="thong-so"><h2>Chi tiết làm nên khác biệt</h2>
<dl class="specs">
<dt>Mã sản phẩm</dt>
<dd><?= e($product['code']) ?></dd>
<dt>Danh mục</dt>
<dd><?= e($product['category_name']) ?></dd>
<dt>Kích thước</dt>
<dd><?= e($product['size']) ?></dd>
<dt>Màu sắc</dt>
<dd><?= e(implode(', ', array_map(static fn(string $c): string => $colors[$c]['name'], $product['colors']))) ?></dd>
<dt>Kiểu dáng</dt>
<dd>Unisex · Dùng hằng ngày</dd>
<dt>Chất liệu mẫu</dt>
<dd><?= e($product['material']) ?></dd>
</dl></section><section><h2>Bình luận sản phẩm <span class="muted" style="font-size:13px">(<?= count($comments) ?>)</span>
</h2>
<?php foreach ($comments as $comment): ?><div class="comment"><div class="comment-head"><span class="avatar">KH</span><div><strong><?= e($comment['author']) ?></strong><br><small>Bình luận mẫu · <?= e($comment['date']) ?></small></div></div><p><?= e($comment['content']) ?></p></div><?php endforeach; ?><?php if ($comments === []): ?><p class="muted space-bottom">Chưa có bình luận được duyệt trong dữ liệu mẫu.</p><?php endif; ?><form class="comment-form" action="<?= e(front_url()) ?>" method="get">
<?= form_route('phan-hoi') ?><label for="comment">Chia sẻ câu hỏi của bạn</label><textarea id="comment" required maxlength="1000" placeholder="Bạn muốn tìm hiểu thêm điều gì về sản phẩm?"></textarea><button class="button secondary small" type="submit">Xem trước bình luận</button><p class="form-note">Bình luận thật yêu cầu đăng nhập và được duyệt trước khi công khai.</p>
</form></section>
</div>
<section class="recommendations"><div class="section-heading">
<h2>Có thể bạn cũng thích</h2>
<a class="text-link" href="<?= e(url('san-pham')) ?>">Xem bộ sưu tập <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></a>
</div>
<?php partial('components/product-grid', ['products' => $products, 'colors' => $colors]); ?></section>
