<div class="collection-head">
<div>
<p class="eyebrow">BOLA / EVERYDAY COMPANION</p>
<h1><?= e($title) ?><sup><?= count($products) ?></sup></h1>
</div>
<div class="collection-description"><p>Một chiếc balo. Vạn hành trình.<br>Tìm người bạn đồng hành mang dấu ấn của bạn.</p></div>
</div>
<?php if (!$isNew): ?>
<div class="category-tabs" role="group" aria-label="Danh mục sản phẩm">
<input class="choice-input" type="radio" id="cat-all" name="category" checked><label for="cat-all">Tất cả <small><?= count($products) ?></small></label>
<?php foreach ($categories as $category): ?><input class="choice-input" type="radio" id="cat-<?= e($category['slug']) ?>" name="category"><label for="cat-<?= e($category['slug']) ?>"><?= e($category['name']) ?> <small><?= $category['count'] ?></small></label><?php endforeach; ?>
</div>
<?php else: ?><input type="radio" class="choice-input" id="cat-all" name="category" checked aria-label="Danh mục hàng mới"><?php endif; ?>
<div class="catalog-toolbar">
<p class="catalog-count"><?= count($products) ?> mẫu trong bộ sưu tập</p>
<details class="filter-toggle"><summary><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 6h18M6 12h12M9 18h6"></path></svg><span class="filter-open">Bộ lọc</span><span class="filter-close">Đóng bộ lọc</span></summary><div class="filter-panel">
<fieldset>
<legend>Khoảng giá</legend>
<label><input type="radio" name="price" id="price-all" checked>Tất cả mức giá</label><label><input type="radio" name="price" id="price-under">Dưới 250.000₫</label><label><input type="radio" name="price" id="price-mid">250.000₫ – 300.000₫</label><label><input type="radio" name="price" id="price-over">Trên 300.000₫</label>
</fieldset>
<fieldset>
<legend>Màu sắc</legend>
<label><input type="radio" name="color" id="color-all" checked>Tất cả màu</label><label><input type="radio" name="color" id="color-black">Đen</label><label><input type="radio" name="color" id="color-cream">Kem</label><label><input type="radio" name="color" id="color-blue">Xanh denim</label><label><input type="radio" name="color" id="color-brown">Nâu</label>
</fieldset>
<div>
<p class="eyebrow">DỄ DÀNG LỰA CHỌN</p>
<p class="muted" style="font-size:12px">Chọn danh mục, mức giá và màu sắc phù hợp với bạn. Có thể kết hợp các điều kiện.</p>
</div>
<div class="filter-help">
<span>Bộ lọc áp dụng ngay trên danh sách hiện tại.</span><a href="<?= e(url('san-pham')) ?>">Xóa tất cả bộ lọc</a>
</div>
</div></details><details class="sort-menu"><summary><span class="sort-caption muted">Sắp xếp:</span><span class="sort-value-default">Mặc định</span><span class="sort-value-low">Giá tăng dần</span><span class="sort-value-high">Giá giảm dần</span><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></summary><fieldset class="sort-options">
<legend class="sr-only">Sắp xếp sản phẩm</legend>
<label><input type="radio" name="sort" id="sort-default" checked>Mặc định</label><label><input type="radio" name="sort" id="sort-low">Giá từ thấp đến cao</label><label><input type="radio" name="sort" id="sort-high">Giá từ cao đến thấp</label>
</fieldset></details>
</div>
<div class="product-grid"><?php foreach ($products as $p): partial('components/product-card', ['p' => $p, 'colors' => $colors]); endforeach; ?><div class="catalog-empty" id="<?= $isNew ? 'new-empty' : 'catalog-empty' ?>">
<h2>Chưa có mẫu phù hợp</h2>
<p>Bạn thử thay đổi mức giá, màu sắc hoặc chọn lại danh mục nhé.</p>
<a class="button secondary" href="<?= e(url('san-pham')) ?>">Xem tất cả sản phẩm</a>
</div>
</div>
<div class="catalog-foot">
<p>Bộ sưu tập gồm <?= count($products) ?> sản phẩm</p>
<div class="load-progress"><span></span></div>
<a href="#main" class="text-link">Về đầu bộ sưu tập ↑</a>
</div>
<section class="editorial-band"><div class="editorial-copy">
<p class="eyebrow">MANG THEO ĐIỀU BẠN THÍCH</p>
<h2>Đi thật nhẹ.<br>Sống thật đầy.</h2>
<p>Từ giảng đường đến những cuộc hẹn cuối tuần, BOLA luôn sẵn sàng cùng bạn.</p>
<a class="text-link" href="<?= e(url('gioi-thieu')) ?>">Câu chuyện BOLA <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></a>
</div>
<div class="editorial-image"><img src="<?= e(asset('images/balo-03.jpg')) ?>" width="640" height="640" loading="lazy" alt="Balo denim đồng hành trên phố"></div></section>
