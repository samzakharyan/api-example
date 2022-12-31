<?php

namespace App\Services;

use App\Interfaces\APIInterface;
use App\Models\Order;

class ProductService implements APIInterface {
    
    public function get(int $orderId)
    {
        return Order::with('products')->findOrFail($orderId);
    }
}