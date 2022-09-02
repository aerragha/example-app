<?php

namespace App\Repositories\Product;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    public function create(array $data): Product
    {
        return Product::query()->create($data);
    }

    public function get(): Collection
    {
        return Product::query()->get();
    }

    public function getById(int $id): ?Product
    {
        return Product::query()->find($id);
    }

    public function update(array $data, int $id): bool
    {
        $product = Product::query()->where('id', $id)->update($data);
        return $product;
    }

    public function delete(int $id): bool
    {
        return Product::query()->delete($id);
    }
}
