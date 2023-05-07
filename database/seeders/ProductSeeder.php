<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::create([
            'name' => 'Kaos Bola',
            'size' => 'XL',
            'qty' => 50,
            'item' => 'PCS',
            'description' => 'Kaos Bola Premium',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Kaos Partai',
            'size' => 'XL',
            'qty' => 50,
            'item' => 'PCS',
            'description' => 'Kaos Partai Premium',
            'category_id' => 1,
        ]);
    }
}
