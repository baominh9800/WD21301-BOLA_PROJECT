<div class="account-layout">
<?php partial('partials/account-sidebar', ['accountActive' => $accountActive]); ?><section class="account-main"><h1>Những điều bạn thích</h1>
<p>Danh sách minh họa. Dấu tim trên từng thẻ chỉ thay đổi trong trang đang mở.</p>
<?php partial('components/product-grid', ['products' => $products, 'colors' => $colors]); ?></section>
</div>
