<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\BaseController;
use App\Http\Requests\ProductRequest;
use App\Services\Product\ProductService;

class CreateProductController extends BaseController
{

    public function __construct(private ProductService $productService)
    {
    }

    
    public function __invoke(ProductRequest $request)
    {
        try {
            $product = $this->productService->create($request->all());
            return $this->sendResponse($product, 'Product created');
        } catch (\Throwable $th) {
            // You can add logger here
            return $this->sendError('Something went wrong', 500);
        }
    }
}
