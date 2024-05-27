<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('db.products');
        foreach ($products as $product) {
            $new_product = new Product();
            $new_product->thumb=$product['thumb'];
            $new_product->price=$product['price'];
            $new_product->series=$product['series'];
            $new_product->type=$product['type'];
            $new_product->save();
        }
    }
}
