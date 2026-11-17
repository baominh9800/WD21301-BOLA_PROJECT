<?php require APP_ROOT . '/app/Views/partials/head.php'; ?>
<body>
<?php require APP_ROOT . '/app/Views/partials/header.php'; ?>
<main id="main" class="container">
    <nav class="breadcrumb" aria-label="Đường dẫn">
        <a href="<?= e(url('trang-chu')) ?>">Trang chủ</a><?= icon('chevron') ?><span aria-current="page"><?= e($title) ?></span>
    </nav>
    <?= $content ?>
</main>
<?php require APP_ROOT . '/app/Views/partials/footer.php'; ?>
</body></html>
