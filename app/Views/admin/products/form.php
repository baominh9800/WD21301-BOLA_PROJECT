<?php $editing = $product !== null; $product ??= ['id'=>0,'name'=>'','price'=>'','cat'=>'','status'=>'live','image'=>'','code'=>'']; ?>
<div class="admin-page-head">
<div>
<h1><?= e($title) ?></h1>
<p>Thông tin sản phẩm theo SanPham, DanhMuc và HinhAnhSp.</p>
</div>
<a class="button secondary" href="<?= e(url('admin')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4m6-6-6 6 6 6"></path></svg>Quay lại</a>
</div>
<form action="<?= e(front_url()) ?>" method="get">
<?= form_route('admin/phan-hoi') ?><div class="admin-form-layout">
<div>
<section class="admin-panel"><div class="admin-panel-title"><h2>Thông tin cơ bản</h2></div>
<div class="admin-panel-body"><div class="form-grid">
<div class="field full">
<label for="TenSanPham">Tên sản phẩm <span class="required">*</span></label><input id="TenSanPham" type="text" placeholder="Ví dụ: <?= e($product['name']) ?>" required value="<?= e($product['name']) ?>" maxlength="150">
</div>
<div class="field">
<label for="MaDanhMuc">Danh mục <span class="required">*</span></label><select id="MaDanhMuc" required><option value="">Chọn danh mục</option><?php foreach ($categories as $category): ?><option value="<?= e($category['id']) ?>" <?= $product['cat'] === $category['slug'] ? 'selected' : '' ?>><?= e($category['name']) ?></option><?php endforeach; ?></select>
</div>
<div class="field ">
<label for="Gia">Giá bán (VNĐ) <span class="required">*</span></label><input id="Gia" type="number" placeholder="295000" required value="<?= e($product['price']) ?>" min="1000" step="1000">
</div>
<div class="field full">
<label for="MoTa">Mô tả sản phẩm <span class="required">*</span></label><textarea id="MoTa" required maxlength="3000" placeholder="Thông tin kiểu dáng, chất liệu, ngăn chứa, bảo quản…"><?= e($product['description'] ?? '') ?></textarea>
</div>
</div></div></section><section class="admin-panel"><div class="admin-panel-title"><h2>Hình ảnh sản phẩm</h2></div>
<div class="admin-panel-body">
<div class="upload-box">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 16V2m-5 5 5-5 5 5M3 15v6h18v-6"></path></svg><label for="HinhAnhSp">Chọn hình ảnh sản phẩm</label><input id="HinhAnhSp" type="file" accept="image/png,image/jpeg,image/webp" multiple><small>JPG, PNG hoặc WEBP · Chọn ảnh để xem tên tệp; chưa tải lên.</small>
</div>
<?php if ($editing): ?><div class="admin-image-preview">
<img src="<?= e(asset($product['image'])) ?>" alt="Ảnh đại diện hiện tại" width="65" height="70"><span>Ảnh đại diện hiện tại<br><?= e($product['code']) ?></span>
</div>
<?php endif; ?>
</div></section>
</div>
<aside class="admin-form-side"><section class="admin-panel"><div class="admin-panel-title"><h2>Trạng thái bán hàng</h2></div>
<div class="admin-panel-body"><div class="field">
<label for="TrangThai">Hiển thị sản phẩm</label><select id="TrangThai"><option value="live" <?= $product['status'] === 'live' ? 'selected' : '' ?>>Đang bán</option><option value="hidden" <?= $product['status'] === 'hidden' ? 'selected' : '' ?>>Đang ẩn</option></select><small>Sản phẩm bị ẩn cần được loại khỏi truy vấn bán hàng khi tích hợp backend.</small>
</div></div></section><section class="admin-panel"><div class="admin-panel-title"><h2>Màu sắc &amp; kích thước</h2></div>
<div class="admin-panel-body">
<p class="muted" style="font-size:11px;margin-bottom:15px">Giá, màu, size và tồn kho từng tổ hợp được quản lý ở phần biến thể.</p>
<a class="button secondary small" href="<?= e(url('admin/bien-the')) ?>"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m12 2 10 5-10 5L2 7l10-5ZM2 12l10 5 10-5M2 17l10 5 10-5"></path></svg>Quản lý biến thể</a>
</div></section><div class="notice ">
<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Biểu mẫu chỉ xem trước. Chọn tệp không tải ảnh lên máy chủ.</span>
</div></aside>
</div>
<div class="admin-form-actions">
<p>Chưa kết nối lưu dữ liệu.</p>
<a class="button secondary" href="<?= e(url('admin')) ?>">Hủy</a><button class="button" type="submit">Xem trước biểu mẫu</button>
</div>
</form>
