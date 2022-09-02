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

    public function createUser(array $data)
    {
        /* 
           Here you can add a layer of caching...
        */

        return $this->productRepository->createUser($data);
    }

    public function getAllProducts()
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->getAllProducts();
    }

    public function getProductById(int $id)
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->getProductById($id);
    }

    public function updateProductById(array $data, int $id)
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->updateProductById($data, $id);
    }

    public function deleteProductById(int $id)
    {
        /* 
           Here you can add a layer of caching...
        */
        return $this->productRepository->deleteProductById($id);
    }
}
