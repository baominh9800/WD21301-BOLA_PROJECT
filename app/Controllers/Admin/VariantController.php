<?php
declare(strict_types=1);
namespace App\Controllers\Admin;
use App\Models\Variant;
final class VariantController extends AdminController
{
    public function index(): void { $this->adminView('admin/variants', ['title' => 'Biến thể', 'active' => 'variants', 'variants' => (new Variant())->all()]); }
}
