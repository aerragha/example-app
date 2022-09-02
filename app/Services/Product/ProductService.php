<?php

namespace App\Services\Product;

use App\Managers\Product\ProductManager;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    public function __construct(private ProductManager $productManager)
    {
    }

    /**
     * Store a newly created product in database.
     *
     * @param  array $data
     * @return \Illuminate\Http\Response
     */
    public function create(array $data): Product
    {
        /* 
            Here you can performs validation and business logic
        */
        return $this->productManager->create($data);
    }


    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(): Collection
    {
        /* 
            Here you can performs validation and business logic
        */
        return $this->productManager->get();
    }

    /**
     * Display a specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getById(int $id): ?Product
    {
        /* 
            Here you can performs validation and business logic
        */
        return $this->productManager->getById($id);
    }

    /**
     * Update a specified product in database.
     *
     * @param  array  $data
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data, int $id)
    {
        /* 
            Here you can performs validation and business logic
        */
        return $this->productManager->update($data, $id);
    }

    /**
     * Remove a specified product from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(int $id)
    {
        /* 
            Here you can performs validation and business logic
        */
        return $this->productManager->delete($id);
    }
}
