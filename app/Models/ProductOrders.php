<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrders extends Model
{
    use HasFactory;

    public function products() {
        return $this->belongsToMany(Product::class, 'product_orders',
        'order_id', 'product_id');
    }
}
