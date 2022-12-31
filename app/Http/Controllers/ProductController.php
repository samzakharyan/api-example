<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(
        public ProductService $service 
    )
    {
        //
    }

    public function get(int $orderId)
    {
        return $this->service->get($orderId);
    }
}
