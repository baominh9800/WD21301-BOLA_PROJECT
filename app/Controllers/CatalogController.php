<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\{Category, Comment, Product};

final class CatalogController extends Controller
{
    public function index(): void
    {
        $this->render('client/catalog', ['title' => 'Balo & túi', 'products' => (new Product())->all(), 'categories' => (new Category())->all(), 'isNew' => false]);
    }

    public function home(): void
    {
        $this->render('client/home', ['title' => 'Trang chủ', 'active' => 'home', 'products' => array_slice((new Product())->all(), 0, 4)]);
    }

    public function newest(): void
    {
        $this->render('client/catalog', ['title' => 'Hàng mới', 'active' => 'new', 'products' => (new Product())->newest(), 'categories' => (new Category())->all(), 'isNew' => true]);
    }

    public function show(): void
    {
        $model = new Product();
        $product = $model->find(query_id());
        if ($product === null) {
            $this->notFound('Sản phẩm không tồn tại hoặc đang được ẩn.');
            return;
        }
        $related = array_values(array_filter($model->all(), static fn(array $p): bool => $p['id'] !== $product['id']));
        $this->render('client/product', ['title' => $product['name'], 'product' => $product, 'products' => array_slice($related, 0, 4), 'comments' => (new Comment())->approvedForProduct($product['id'])]);
    }

    public function search(): void
    {
        $term = query_string('q');
        $this->render('client/search', ['title' => 'Tìm kiếm', 'term' => $term, 'products' => (new Product())->search($term)]);
    }
}
