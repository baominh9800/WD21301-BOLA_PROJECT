<div class="admin-page-head"><div>
<h1>Bình luận sản phẩm</h1>
<p>Xem nội dung, duyệt, ẩn hoặc chặn bình luận.</p>
</div></div>
<section class="admin-panel"><div class="admin-toolbar"><div class="admin-tabs">
<input class="choice-input" type="radio" id="comments-all" name="comments" checked><label for="comments-all">Tất cả <small>4</small></label><input class="choice-input" type="radio" id="comments-pending" name="comments"><label for="comments-pending">Chờ duyệt <small>2</small></label><input class="choice-input" type="radio" id="comments-live" name="comments"><label for="comments-live">Đã duyệt <small>1</small></label><input class="choice-input" type="radio" id="comments-hidden" name="comments"><label for="comments-hidden">Đang ẩn <small>1</small></label>
</div></div>
<div class="admin-table-wrap"><table class="admin-table">
<thead><tr>
<th scope="col">Người bình luận</th>
<th scope="col">Sản phẩm</th>
<th scope="col">Nội dung</th>
<th scope="col">Trạng thái</th>
<th scope="col">Thao tác</th>
</tr></thead>
<tbody>
<?php foreach ($comments as $comment): ?><tr data-comment-state="<?= e($comment['filter_key']) ?>">
<td><strong><?= e($comment['author']) ?></strong><br><small class="muted"><?= e($comment['date']) ?></small></td>
<td><a href="<?= e(url('san-pham/chi-tiet', ['id'=>$comment['product_id']])) ?>"><?= e($comment['product']['name']) ?></a></td>
<td><p class="comment-content"><?= e($comment['content']) ?></p></td>
<td><span class="<?= 'tag ' . (e($comment['tone'])) ?>"><?= e($comment['status']) ?></span></td>
<td><div class="table-actions">
<a href="#duyet-<?= e($comment['id']) ?>" aria-label="Duyệt bình luận 001"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m5 12 4 4L20 5"></path></svg></a><a href="#an-bl-<?= e($comment['id']) ?>" aria-label="Ẩn bình luận 001"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m3 3 18 18M10 5a10 10 0 0 1 2 0c6 0 10 7 10 7a17 17 0 0 1-4 4M6 6a22 22 0 0 0-4 6s4 7 10 7a13 13 0 0 0 5-1"></path></svg></a><a href="#chan-bl-<?= e($comment['id']) ?>" aria-label="Chặn bình luận 001"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><rect x="5" y="10" width="14" height="12" rx="2"></rect><path d="M8 10V6a4 4 0 0 1 8 0v4M12 15v3"></path></svg></a>
</div></td>
</tr>
<?php endforeach; ?>
</tbody>
</table></div>
<div class="table-foot">
<span>Dữ liệu mẫu: 4 bình luận</span><span class="page-indicator" aria-current="page">1</span>
</div></section>
<p class="admin-note"><svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg>Các thao tác trong bản PHP MVC chỉ minh họa giao diện; dữ liệu chưa được thay đổi.</p>
<?php foreach ($comments as $comment): ?><section class="css-modal" id="duyet-<?= e($comment['id']) ?>" role="dialog" aria-modal="true" aria-labelledby="duyet-<?= e($comment['id']) ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="duyet-<?= e($comment['id']) ?>-title">Duyệt bình luận?</h2>
<a class="modal-close" href="<?= e(url('admin/binh-luan')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body">
<p>Bình luận của <?= e($comment['author']) ?>: “<?= e($comment['content']) ?>”</p>
<div class="notice ">
<svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu không thay đổi hay xóa dữ liệu.</span>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin/binh-luan')) ?>">Quay lại</a><a class="button small" href="<?= e(url('admin/phan-hoi')) ?>">Xem trước thao tác</a>
</div>
</div>
</div></section>
<section class="css-modal" id="an-bl-<?= e($comment['id']) ?>" role="dialog" aria-modal="true" aria-labelledby="an-bl-<?= e($comment['id']) ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="an-bl-<?= e($comment['id']) ?>-title">Ẩn bình luận?</h2>
<a class="modal-close" href="<?= e(url('admin/binh-luan')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body">
<p>Bình luận của <?= e($comment['author']) ?>: “<?= e($comment['content']) ?>”</p>
<div class="notice ">
<svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu không thay đổi hay xóa dữ liệu.</span>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin/binh-luan')) ?>">Quay lại</a><a class="button small" href="<?= e(url('admin/phan-hoi')) ?>">Xem trước thao tác</a>
</div>
</div>
</div></section>
<section class="css-modal" id="chan-bl-<?= e($comment['id']) ?>" role="dialog" aria-modal="true" aria-labelledby="chan-bl-<?= e($comment['id']) ?>-title"><div class="modal-box">
<div class="modal-head">
<h2 id="chan-bl-<?= e($comment['id']) ?>-title">Chặn bình luận?</h2>
<a class="modal-close" href="<?= e(url('admin/binh-luan')) ?>" aria-label="Đóng hộp thoại"><svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><path d="m6 6 12 12M6 18 18 6"></path></svg></a>
</div>
<div class="modal-body">
<p>Bình luận của <?= e($comment['author']) ?>: “<?= e($comment['content']) ?>”</p>
<div class="notice ">
<svg class="icon" viewbox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 11v6M12 7h.01"></path></svg><span>Bản mẫu không thay đổi hay xóa dữ liệu.</span>
</div>
<div class="modal-actions">
<a class="button secondary small" href="<?= e(url('admin/binh-luan')) ?>">Quay lại</a><a class="button small" href="<?= e(url('admin/phan-hoi')) ?>">Xem trước thao tác</a>
</div>
</div>
</div></section>
<?php endforeach; ?>
