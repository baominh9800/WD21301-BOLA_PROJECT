<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\{Category, Product};

final class ProductController extends AdminController
{
    public function index(): void
    {
        $products = (new Product())->all(true);
        $this->adminView('admin/products/index', ['title' => 'Sản phẩm', 'active' => 'products', 'products' => $products, 'allProducts' => $products, 'term' => '']);
    }

    public function search(): void
    {
        $term = query_string('q');
        $this->adminView('admin/products/index', ['title' => 'Tìm kiếm sản phẩm', 'active' => 'products', 'products' => (new Product())->search($term, true), 'allProducts' => (new Product())->all(true), 'term' => $term]);
    }

    public function create(): void
    {
        $this->form(null);
    }

    public function edit(): void
    {
        $product = (new Product())->find(query_id(), true);
        if ($product === null) {
            $this->notFound('Không tìm thấy sản phẩm cần sửa.');
            return;
        }
        $this->form($product);
    }

    private function form(?array $product): void
    {
        $this->adminView('admin/products/form', ['title' => $product ? 'Chỉnh sửa sản phẩm' : 'Thêm sản phẩm', 'active' => 'products', 'product' => $product, 'categories' => (new Category())->all(true)]);
    }
}
