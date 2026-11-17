<?php
declare(strict_types=1);
namespace App\Controllers\Admin;
use App\Models\Comment;
final class CommentController extends AdminController
{
    public function index(): void { $this->adminView('admin/comments', ['title' => 'Bình luận', 'active' => 'comments', 'comments' => (new Comment())->all()]); }
}
