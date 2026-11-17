<div class="admin-page-head"><div>
<h1>Biến thể sản phẩm</h1>
<p>Quản lý màu sắc, kích thước, đơn giá và số lượng tồn.</p>
</div></div>
<section class="admin-panel"><div class="admin-panel-title">
<h2>Tất cả biến thể</h2>
<span class="muted" style="font-size:10px"><?= count($variants) ?> tổ hợp</span>
</div>
<div class="admin-variant-help">Mỗi tổ hợp sản phẩm – màu – size có mã biến thể riêng. Chỉnh sửa để xem biểu mẫu tồn kho và giá.</div>
<div class="admin-table-wrap"><table class="admin-table">
<thead><tr>
<th scope="col">Mã biến thể</th>
<th scope="col">Sản phẩm</th>
<th scope="col">Màu sắc</th>
<th scope="col">Size</th>
<th scope="col">Tồn kho</th>
<th scope="col">Đơn giá</th>
<th scope="col">Thao tác</th>
</tr></thead>
<tbody>
<?php foreach ($variants as $variant): ?><tr>
<td><?= e($variant['code']) ?></td>
<td><?php partial('components/admin-product', ['p' => $variant['product']]); ?></td>
<td><span class="color-dot" style="--swatch:<?= e($colors[$variant['color']]['hex']) ?>"></span><?= e($colors[$variant['color']]['name']) ?></td>
<td><?= e($variant['size']) ?></td>
<td><?= $variant['stock'] ?></td>
<td class="price"><?= money($variant['price']) ?></td>
<td><div class="table-actions">
<a href="#sua-<?= e($variant['code']) ?>" aria-label="Sửa BT0011"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m15 4 5 5M3 21l5-1L21 7a3.5 3.5 0 0 0-5-5L3 15v6Z"></path></svg></a><a href="#xoa-<?= e($variant['code']) ?>" aria-label="Xóa BT0011"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="M3 6h18M5 6l1 16h12l1-16M9 6V2h6v4M10 10v7M14 10v7"></path></svg></a>
</div></td>
</tr>
<?php endforeach; ?>
</tbody>
</table></div>
<div class="table-foot">
<span>Dữ liệu mẫu: <?= count($variants) ?> biến thể</span><span class="page-indicator" aria-current="page">1</span>
</div></section>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
<?php foreach ($variants as $variant): ?><section class="css-modal" id="sua-<?= e($variant['code']) ?>" role="dialog" aria-modal="true" aria-labelledby="sua-<?= e($variant['code']) ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="sua-<?= e($variant['code']) ?>-title">Sửa biến thể <?= e($variant['code']) ?></h2>
<a class="modal-close" href="<?= e(url('admin/bien-the')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body"><form action="<?= e(front_url()) ?>" method="get">
<?= form_route('admin/phan-hoi') ?><p><?= e($variant['product']['name']) ?> · <?= e($colors[$variant['color']]['name']) ?> / <?= e($variant['size']) ?></p>
<div class="form-grid">
<div class="field ">
<label for="variant-stock-<?= e($variant['code']) ?>">Số lượng tồn <span class="required">*</span></label><input id="variant-stock-<?= e($variant['code']) ?>" type="number" placeholder="" required value="<?= e($variant['stock']) ?>" min="0" max="9999">
</div>
<div class="field ">
<label for="variant-price-<?= e($variant['code']) ?>">Đơn giá (VNĐ) <span class="required">*</span></label><input id="variant-price-<?= e($variant['code']) ?>" type="number" placeholder="" required value="<?= e($variant['price']) ?>" min="1000" step="1000">
</div>
<div class="field">
<label for="SizeID-<?= e($variant['code']) ?>">Kích thước</label><select id="SizeID-<?= e($variant['code']) ?>"><option><?= e($variant['size']) ?></option>
<option><?= e($variant['size']) ?></option>
<option>14 inch</option>
<option>Mini</option></select>
</div>
<div class="field">
<label for="ColorID-<?= e($variant['code']) ?>">Màu sắc</label><select id="ColorID-<?= e($variant['code']) ?>"><?php foreach ($colors as $key => $color): ?><option <?= $key === $variant['color'] ? 'selected' : '' ?>><?= e($color['name']) ?></option><?php endforeach; ?></select>
</div>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin/bien-the')) ?>">Hủy</a><button type="submit" class="button small">Xem trước cập nhật</button>
</div>
</form></div>
</div></section>
<section class="css-modal" id="xoa-<?= e($variant['code']) ?>" role="dialog" aria-modal="true" aria-labelledby="xoa-<?= e($variant['code']) ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="xoa-<?= e($variant['code']) ?>-title">Kiểm tra trước khi xóa</h2>
<a class="modal-close" href="<?= e(url('admin/bien-the')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body">
<p>Không xóa vật lý biến thể đã được dùng trong đơn hàng. Khi tích hợp backend, cần kiểm tra ChiTietDonHang và ChiTietGioHang trước khi xử lý yêu cầu.</p>
<div class="notice ">
<svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu không thực hiện xóa dữ liệu.</span>
</div>
<div class="modal-actions"><a class="button small" href="<?= e(url('admin/bien-the')) ?>">Quay lại</a></div>
</div>
</div></section>
<?php endforeach; ?>
