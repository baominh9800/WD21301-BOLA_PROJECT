<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BOLA — Giao diện website bán balo được tổ chức theo PHP MVC.">
    <title><?= e($title) ?> | BOLA MVC</title>
    <link rel="icon" href="<?= e(asset('favicon.svg')) ?>" type="image/svg+xml">
    <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
    <?php if ($isAdmin): ?><link rel="stylesheet" href="<?= e(asset('css/admin.css')) ?>"><?php endif; ?>
</head>
