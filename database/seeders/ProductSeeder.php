<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('en_US');

        for ($i = 0; $i <= 10; $i++) {
            Product::create([
                'name' => $faker->realText(10),
                'price' => $faker->randomDigit,
                'count' => $faker->randomDigit,
                'sku' => $faker->word,
            ]);
        }
    }
}
