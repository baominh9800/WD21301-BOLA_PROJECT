<?php if ($term !== ''): ?><div class="notice info space-bottom">Kết quả cho: <?= e($term) ?> · <?= count($products) ?> sản phẩm</div><?php endif; ?><div class="admin-page-head">
<div>
<h1>Sản phẩm</h1>
<p>Quản lý sản phẩm, hình ảnh và trạng thái hiển thị.</p>
</div>
<a class="button " href="<?= e(url('admin/san-pham/them')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4v16M4 12h16"></path></svg>Thêm sản phẩm</a>
</div>
<div class="stats-row">
<article class="stat-card"><div class="stat-top">
<span>Tổng sản phẩm</span><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m12 2 9 5v10l-9 5-9-5V7l9-5ZM3 7l9 5 9-5M12 12v10M7.5 4.5l9 5"></path></svg>
</div>
<p class="stat-number"><?= count($allProducts) ?><small>4 danh mục</small></p></article><article class="stat-card"><div class="stat-top">
<span>Đang kinh doanh</span><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
</div>
<p class="stat-number"><?= count(array_filter($allProducts, static fn(array $p): bool => $p['status'] === 'live')) ?><small>Sản phẩm hiển thị</small></p></article><article class="stat-card"><div class="stat-top">
<span>Đang ẩn</span><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m3 3 18 18M10 5a10 10 0 0 1 2 0c6 0 10 7 10 7a17 17 0 0 1-4 4M6 6a22 22 0 0 0-4 6s4 7 10 7a13 13 0 0 0 5-1"></path></svg>
</div>
<p class="stat-number"><?= count(array_filter($allProducts, static fn(array $p): bool => $p['status'] === 'hidden')) ?><small>Tạm ngừng hiển thị</small></p></article>
</div>
<section class="admin-panel"><div class="admin-toolbar">
<div class="admin-tabs" role="group" aria-label="Trạng thái sản phẩm">
<input class="choice-input" type="radio" id="status-all" name="status" checked><label for="status-all">Tất cả <small><?= count($products) ?></small></label><input class="choice-input" type="radio" id="status-live" name="status"><label for="status-live">Đang bán <small><?= count(array_filter($products, static fn(array $p): bool => $p['status'] === 'live')) ?></small></label><input class="choice-input" type="radio" id="status-hidden" name="status"><label for="status-hidden">Đang ẩn <small><?= count(array_filter($products, static fn(array $p): bool => $p['status'] === 'hidden')) ?></small></label>
</div>
<form class="admin-search" action="<?= e(front_url()) ?>" method="get" role="search">
<?= form_route('admin/tim-kiem') ?><label for="admin-q" class="sr-only">Tìm mã sản phẩm mẫu BL001</label><input id="admin-q" name="q" type="search" placeholder="Tìm mã BL001…" required maxlength="120" value="<?= e($term ?? '') ?>"><button type="submit" aria-label="Tìm sản phẩm"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.8" cy="10.8" r="7.3"></circle><path d="m16 16 5 5"></path></svg></button>
</form>
</div>
<div class="admin-table-wrap"><table class="admin-table">
<thead><tr>
<th scope="col">Sản phẩm</th>
<th scope="col">Danh mục</th>
<th scope="col">Giá bán</th>
<th scope="col">Tồn kho</th>
<th scope="col">Trạng thái</th>
<th scope="col">Thao tác</th>
</tr></thead>
<tbody>
<?php foreach ($products as $product): ?><tr class="admin-product-row" data-state="<?= e($product['status']) ?>">
<td><?php partial('components/admin-product', ['p' => $product]); ?></td>
<td><?= e($product['category_name']) ?></td>
<td class="price"><?= money($product['price']) ?></td>
<td><?= (int) $product['stock'] ?></td>
<td><span class="<?= 'tag ' . ($product['status'] === 'live' ? 'green' : 'gray') ?>"><?= $product['status'] === 'live' ? 'Đang bán' : 'Đang ẩn' ?></span></td>
<td><div class="table-actions">
<a href="<?= e(url('admin/san-pham/sua', ['id' => $product['id']])) ?>" aria-label="Sửa <?= e($product['name']) ?>"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m15 4 5 5M3 21l5-1L21 7a3.5 3.5 0 0 0-5-5L3 15v6Z"></path></svg></a><a href="<?= '#an-' . $product['id'] ?>" aria-label="Đổi hiển thị <?= e($product['name']) ?>"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m3 3 18 18M10 5a10 10 0 0 1 2 0c6 0 10 7 10 7a17 17 0 0 1-4 4M6 6a22 22 0 0 0-4 6s4 7 10 7a13 13 0 0 0 5-1"></path></svg></a>
</div></td>
</tr>
<?php endforeach; ?>
</tbody>
</table></div>
<div class="table-foot">
<span>Dữ liệu mẫu: <?= count($products) ?> sản phẩm</span><span class="page-indicator" aria-current="page">1</span>
</div></section>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
<?php foreach ($products as $product): ?><section class="css-modal" id="an-<?= (int) $product['id'] ?>" role="dialog" aria-modal="true" aria-labelledby="an-<?= (int) $product['id'] ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="an-<?= (int) $product['id'] ?>-title"><?= $product['status'] === 'live' ? 'Ẩn sản phẩm?' : 'Hiển thị sản phẩm?' ?></h2>
<a class="modal-close" href="<?= e(url('admin')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body">
<p><?= e($product['name']) ?> · Đây là bản xem trước thay đổi trạng thái. Dữ liệu chưa được lưu.</p>
<div class="notice ">
<svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu không thay đổi hay xóa dữ liệu.</span>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin')) ?>">Quay lại</a><a class="button small" href="<?= e(url('admin/phan-hoi')) ?>">Xem trước thao tác</a>
</div>
</div>
</div></section>
<?php endforeach; ?>
<?php if ($products === []): ?><div class="panel">Không có sản phẩm phù hợp với từ khóa.</div><?php endif; ?>