<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

final class PageController extends Controller
{
    public function about(): void { $this->render('client/pages/about', ['title' => 'Về BOLA', 'active' => 'about']); }
    public function policies(): void { $this->render('client/pages/policies', ['title' => 'Chính sách']); }
    public function contact(): void { $this->render('client/pages/contact', ['title' => 'Liên hệ']); }
    public function guide(): void { $this->render('client/pages/guide', ['title' => 'Hướng dẫn bản MVC']); }
    public function preview(): void { $this->render('client/preview', ['title' => 'Xem trước biểu mẫu']); }
}
