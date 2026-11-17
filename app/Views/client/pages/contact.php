<div class="article-layout">
<nav class="article-menu" aria-label="Thông tin BOLA"><a href="<?= e(url('gioi-thieu')) ?>">Về BOLA</a><a href="<?= e(url('chinh-sach')) ?>">Chính sách</a><a href="<?= e(url('lien-he')) ?>">Liên hệ</a><a href="<?= e(url('huong-dan')) ?>">Hướng dẫn bản mẫu</a></nav><article class="article"><p class="eyebrow">BOLA / THÔNG TIN</p>
<h1>BOLA luôn lắng nghe</h1>
<p>Bạn cần tư vấn chọn balo hoặc có câu hỏi về sản phẩm? Hãy xem biểu mẫu liên hệ bên dưới.</p>
<form action="<?= e(front_url()) ?>" method="get">
<?= form_route('phan-hoi') ?><div class="form-grid">
<div class="field ">
<label for="contact-name">Họ tên <span class="required">*</span></label><input id="contact-name" type="text" placeholder="Tên của bạn" required>
</div>
<div class="field ">
<label for="contact-email">Email <span class="required">*</span></label><input id="contact-email" type="email" placeholder="ban@example.com" required>
</div>
<div class="field full">
<label for="contact-message">Nội dung <span class="required">*</span></label><textarea id="contact-message" required placeholder="BOLA có thể giúp gì cho bạn?"></textarea>
</div>
</div>
<button class="button space-top" type="submit">Xem trước lời nhắn</button><p class="form-note">Biểu mẫu minh họa, chưa gửi email hoặc lời nhắn.</p>
</form></article>
</div>
