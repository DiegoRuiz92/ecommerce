<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories=[
            
            /*Celulares y tablets*/ 
            [
                'category_id' => 1,
                'name' => 'Celulares y Smartphones',
                'slug' => Str::slug('Celulares y Smartphones'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para Celulares',
                'slug' => Str::slug('Accesorios para Celulares'),
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatch',
                'slug' => Str::slug('Smartwatch'),
            ],
            /*TV, Audio y Vídeo*/
            [
                'category_id' => 2,
                'name' => 'Televisores',
                'slug' => Str::slug('Televisores'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audio',
                'slug' => Str::slug('Audio'),
            ],
            [
                'category_id' => 2,
                'name' => 'Cámaras',
                'slug' => Str::slug('Cámaras'),
            ],
            /*Consolas y Videojuegos*/
            [
                'category_id' => 3,
                'name' => 'Playstation',
                'slug' => Str::slug('Playstation'),
            ],
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos',
                'slug' => Str::slug('Videojuegos'),
            ],
            /*Computación*/
            [
                'category_id' => 4,
                'name' => 'Laptops',
                'slug' => Str::slug('Laptops'),
            ],
            [
                'category_id' => 4,
                'name' => 'Computadores de Escritorio',
                'slug' => Str::slug('Computadores de Escritorio'),
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
            ],
            /*Moda*/
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color'=> true,
                'size'=> true,
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color'=> true,
                'size'=> true,
            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
