<?php

namespace App\Managers\Product;

use App\Models\Product;
use App\Repositories\Product\ProductRepository;
use Illuminate\Database\Eloquent\Collection;

class ProductManager
{
    public function __construct(private ProductRepository $productRepository)
    {
    }

    public function create(array $data)
    {
        /* 
           Here you can add a layer of caching...
        */

        return $this->productRepository->create($data);
    }

    public function get()
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->get();
    }

    public function getById(int $id)
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->getById($id);
    }

    public function update(array $data, int $id)
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->update($data, $id);
    }

    public function delete(int $id)
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->delete($id);
    }
}
