<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrders;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i <= 10; $i++) { 
            $products = Product::all()->pluck('id');
            $orders = Order::all()->pluck('id');

            ProductOrders::create([
                'product_id' => $faker->randomElement($products),
                'order_id' => $faker->randomElement($orders),
            ]);
        }
    }
}
