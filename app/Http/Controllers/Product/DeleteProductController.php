<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\BaseController;
use App\Services\Product\ProductService;

class DeleteProductController extends BaseController
{
    public function __construct(private ProductService $productService)
    {
    }

    public function __invoke(int $id)
    {
        try {
            $product =  $this->productService->getById($id);
            if (!$product)
                return $this->sendError('Product not found', [], 404);

            $this->productService->delete($id);
            return $this->sendResponse(null, 'Product deleted');
        } catch (\Throwable $th) {
            // You can add logger here
            return  $this->sendError('Something went wrong', 500);
        }
    }
}
