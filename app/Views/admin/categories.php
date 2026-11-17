<div class="admin-page-head">
<div>
<h1>Danh mục sản phẩm</h1>
<p>Sắp xếp sản phẩm thành các nhóm dễ tìm kiếm.</p>
</div>
<a class="button " href="#them-danh-muc"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4v16M4 12h16"></path></svg>Thêm danh mục</a>
</div>
<section class="admin-panel"><div class="admin-panel-title">
<h2>Tất cả danh mục</h2>
<span class="muted" style="font-size:10px">4 danh mục</span>
</div>
<div class="admin-table-wrap"><table class="admin-table">
<thead><tr>
<th scope="col">Mã danh mục</th>
<th scope="col">Tên danh mục</th>
<th scope="col">Sản phẩm</th>
<th scope="col">Trạng thái</th>
<th scope="col">Thao tác</th>
</tr></thead>
<tbody>
<?php foreach ($categories as $category): ?><tr>
<td>DM<?= str_pad((string) $category['id'], 3, '0', STR_PAD_LEFT) ?></td>
<td><strong><?= e($category['name']) ?></strong></td>
<td><?= $category['count'] ?> sản phẩm</td>
<td><span class="tag green">Hiển thị</span></td>
<td><div class="table-actions">
<a href="#sua-dm-<?= (int) $category['id'] ?>" aria-label="Sửa Balo laptop"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m15 4 5 5M3 21l5-1L21 7a3.5 3.5 0 0 0-5-5L3 15v6Z"></path></svg></a><a href="#xoa-dm-<?= (int) $category['id'] ?>" aria-label="Xóa Balo laptop"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="M3 6h18M5 6l1 16h12l1-16M9 6V2h6v4M10 10v7M14 10v7"></path></svg></a>
</div></td>
</tr>
<?php endforeach; ?>
</tbody>
</table></div>
<div class="table-foot">
<span>Dữ liệu mẫu: 4 danh mục</span><span class="page-indicator" aria-current="page">1</span>
</div></section>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
<?php foreach ($categories as $category): ?><section class="css-modal" id="sua-dm-<?= (int) $category['id'] ?>" role="dialog" aria-modal="true" aria-labelledby="sua-dm-<?= (int) $category['id'] ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="sua-dm-<?= (int) $category['id'] ?>-title">Chỉnh sửa danh mục</h2>
<a class="modal-close" href="<?= e(url('admin/danh-muc')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body"><form action="<?= e(front_url()) ?>" method="get">
<?= form_route('admin/phan-hoi') ?><div class="form-grid">
<div class="field full">
<label for="cat-name-<?= (int) $category['id'] ?>">Tên danh mục <span class="required">*</span></label><input id="cat-name-<?= (int) $category['id'] ?>" type="text" placeholder="" required value="<?= e($category['name']) ?>">
</div>
<div class="field full">
<label for="cat-desc-<?= (int) $category['id'] ?>">Mô tả</label><textarea id="cat-desc-<?= (int) $category['id'] ?>">Những thiết kế phù hợp với nhịp sống của bạn.</textarea>
</div>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin/danh-muc')) ?>">Hủy</a><button type="submit" class="button small">Xem trước cập nhật</button>
</div>
</form></div>
</div></section>
<section class="css-modal" id="xoa-dm-<?= (int) $category['id'] ?>" role="dialog" aria-modal="true" aria-labelledby="xoa-dm-<?= (int) $category['id'] ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="xoa-dm-<?= (int) $category['id'] ?>-title">Danh mục đang được sử dụng</h2>
<a class="modal-close" href="<?= e(url('admin/danh-muc')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body">
<p>Danh mục <strong><?= e($category['name']) ?></strong> hiện có <?= (int) $category['count'] ?> sản phẩm tham chiếu. Không thể xóa danh mục khi các sản phẩm còn thuộc danh mục này.</p>
<div class="notice ">
<svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Đây là tình huống minh họa kiểm tra quan hệ DanhMuc → SanPham.</span>
</div>
<div class="modal-actions"><a class="button small" href="<?= e(url('admin/danh-muc')) ?>">Đã hiểu</a></div>
</div>
</div></section>
<?php endforeach; ?><section class="css-modal" id="them-danh-muc" role="dialog" aria-modal="true" aria-labelledby="them-danh-muc-title"><div class="modal-box">
<div class="modal-head">
<h2 id="them-danh-muc-title">Thêm danh mục</h2>
<a class="modal-close" href="<?= e(url('admin/danh-muc')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body"><form action="<?= e(front_url()) ?>" method="get">
<?= form_route('admin/phan-hoi') ?><div class="form-grid">
<div class="field full">
<label for="new-cat-name">Tên danh mục <span class="required">*</span></label><input id="new-cat-name" type="text" placeholder="Nhập tên danh mục" required>
</div>
<div class="field full">
<label for="new-cat-desc">Mô tả</label><textarea id="new-cat-desc" placeholder="Mô tả ngắn về danh mục"></textarea>
</div>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin/danh-muc')) ?>">Hủy</a><button type="submit" class="button small">Xem trước biểu mẫu</button>
</div>
</form></div>
</div></section>

