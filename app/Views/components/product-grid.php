<div class="product-grid">
<?php foreach ($products as $p): ?>
    <?php partial('components/product-card', ['p' => $p, 'colors' => $colors]); ?>
<?php endforeach; ?>
</div>