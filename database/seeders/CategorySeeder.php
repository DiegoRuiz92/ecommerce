<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //colección de objetos
        $categories = [
            [
                'name' => 'Celulares',
                'slug' => Str::slug('Celulares'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'TV, Audio y Vídeo',
                'slug' => Str::slug('TV, Audio y Vídeo'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'Consolas y Videojuegos',
                'slug' => Str::slug('Consolas y Videojuegos'),
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'Computación',
                'slug' => Str::slug('Computación'),
                'icon' => '<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create(); //recupera los registros 

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id); //recupera la relación con categories y con el método attach puede insertar registros en tabla intermedia
            }
        }
    }
}
