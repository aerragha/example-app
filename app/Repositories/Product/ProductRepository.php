<?php

namespace App\Repositories\Product;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    public function createUser(array $data): Product
    {
        return Product::query()->create($data);
    }

    public function getAllProducts(): Collection
    {
        return Product::query()->get();
    }

    public function getProductById(int $id): ?Product
    {
        return Product::query()->find($id);
    }

    public function updateProductById(array $data, int $id)
    {
        $product = Product::query()->where('id', $id)->update($data);
        return $product;
    }

    public function deleteProductById(int $id)
    {
        return Product::query()->delete($id);
    }
}
