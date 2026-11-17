<?php require APP_ROOT . '/app/Views/partials/head.php'; ?>
<body class="admin">
<a class="skip" href="#main">Đến nội dung chính</a>
<div class="admin-shell">
    <?php require APP_ROOT . '/app/Views/partials/admin-sidebar.php'; ?>
    <div class="admin-main">
        <header class="admin-topbar">
            <nav class="admin-breadcrumb" aria-label="Đường dẫn"><a href="<?= e(url('admin')) ?>">Quản trị</a><?= icon('chevron') ?><strong><?= e($title) ?></strong></nav>
            <div class="topbar-meta"><span>BOLA / DỰ ÁN 1</span><span class="workspace-badge"><b></b>PHP MVC · Bản mẫu</span></div>
        </header>
        <main id="main" class="admin-content">
            <?= $content ?>
            <footer class="admin-footer"><span>© 2026 BOLA · Không gian quản trị</span><a href="<?= e(url('huong-dan')) ?>">PHP MVC · Dữ liệu mẫu</a></footer>
        </main>
    </div>
</div>
</body></html>
