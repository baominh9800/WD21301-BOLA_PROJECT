<section class="editorial-band" style="margin-top:28px;min-height:440px"><div class="editorial-copy">
<p class="eyebrow">BỘ SƯU TẬP EVERYDAY / 2026</p>
<h1 style="font-size:clamp(32px,4vw,57px);line-height:1.12;margin-bottom:18px">Cùng bạn.<br>Trên mọi<br>hành trình.</h1>
<p>Mang theo điều cần thiết, dành chỗ cho những trải nghiệm mới. Tìm chiếc balo thuộc về bạn.</p>
<a class="button " href="<?= e(url('san-pham')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg>Khám phá bộ sưu tập</a>
</div>
<div class="editorial-image" style="max-height:none;height:100%"><img src="<?= e(asset('images/balo-01.jpg')) ?>" alt="Balo City Classic trên vai người dùng" width="640" height="640"></div></section>
<div class="section-heading">
<div>
<p class="eyebrow">ĐƯỢC YÊU THÍCH</p>
<h2>Cho nhịp sống mỗi ngày</h2>
</div>
<a href="<?= e(url('san-pham')) ?>" class="text-link">Xem tất cả <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16m-6-6 6 6-6 6"></path></svg></a>
</div>
<?php partial('components/product-grid', ['products' => $products, 'colors' => $colors]); ?>
<div style="height:50px"></div>
