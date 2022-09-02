<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\BaseController;
use App\Services\Product\ProductService;
use Illuminate\Http\Request;

class UpdateProductController extends BaseController
{
    public function __construct(private ProductService $productService)
    {
    }

    public function __invoke(Request $request, int $id)
    {
        try {
            $data = $request->all();
            if (count($data) < 1)
                return $this->sendError('Body is empty', []);

            $product =  $this->productService->getProductById($id);
            if (!$product)
                return $this->sendError('Product not found', [], 404);

            $this->productService->update($data, $id);

            return $this->sendResponse(null, 'Product updated');
        } catch (\Throwable $th) {
            // You can add logger here
            return $this->sendError('Something went wrong', 500);
        }
    }
}


# https://documenter.getpostman.com/view/13213993/VUxRPRbH


