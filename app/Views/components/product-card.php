<article class="product" data-category="<?= e($p['cat']) ?>" data-colors="<?= e(implode(' ', $p['colors'])) ?>" data-price="<?= e($p['range']) ?>" style="<?= '--low:' . (int) $p['low'] . ';--high:' . (int) $p['high'] ?>"><div class="product-visual">
<?php if ($p['badge'] !== ''): ?><span class="product-tag <?= $p['badge'] === 'MỚI' ? 'new' : '' ?>"><?= e($p['badge']) ?></span><?php endif; ?><label class="favorite" title="Đánh dấu yêu thích trong trang hiện tại"><input type="checkbox" aria-label="<?= e('Yêu thích ' . $p['name']) ?>" id="<?= 'heart-' . (int) $p['id'] ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.8 4.6a5.4 5.4 0 0 0-7.6 0L12 5.8l-1.2-1.2a5.4 5.4 0 0 0-7.6 7.6L12 21l8.8-8.8a5.4 5.4 0 0 0 0-7.6Z"></path></svg></label><a href="<?= e(url('san-pham/chi-tiet', ['id' => $p['id']])) ?>"><img src="<?= e(asset($p['image'])) ?>" alt="<?= e($p['name']) ?>" width="640" height="640" loading="lazy"><span class="quick-view">KHÁM PHÁ SẢN PHẨM <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></span></a>
</div>
<div class="product-info">
<p class="product-category"><?= e($p['category_name']) ?></p>
<h2 class="product-name"><a href="<?= e(url('san-pham/chi-tiet', ['id' => $p['id']])) ?>"><?= e($p['name']) ?> — <?= e($p['sub']) ?></a></h2>
<div class="product-bottom">
<p class="price"><?= money($p['price']) ?></p>
<div class="swatches" aria-label="Màu sắc"><?php foreach ($p['colors'] as $color): ?><span class="swatch" style="--swatch:<?= e($colors[$color]['hex']) ?>" title="<?= e($colors[$color]['name']) ?>"></span><?php endforeach; ?></div>
</div>
</div></article>
