<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Faker\Factory;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('en_US');

        for ($i = 0; $i <= 10; $i ++) {
            Order::create([
                'address' => $faker->address,
                'status' => $faker->randomElement(['NEW', 'READY_FOR_PICKUP', 'DELIVERED']),
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}
