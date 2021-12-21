<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
                    ->where('size', true);
        })->get();

        $sizes = ['Talla S', 'Talla M', 'Talla L'];

        foreach ($sizes as $size){
            foreach ($products as $product) {
                $product->sizes()->create([
                    'name' => $size
                ]);
            }
        }
    }
}
