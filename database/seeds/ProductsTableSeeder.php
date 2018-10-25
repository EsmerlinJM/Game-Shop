<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'PUBG',
            'image' => 'img/pugb_caratula.jpg',
            'description' => 'Xbox One',
            'long_description' => 'El mejor juego del 2017-2018 de Battlegrounds',
            'price' => 39.99,
            'category_id' => 1,
            'featured' => 1,
        ]);

        Product::create([
            'name' => 'Battlefield 1',
            'image' => 'img/bf1_caratula.jpg',
            'description' => 'PC, Xbox y PlayStation disponible',
            'long_description' => 'Battlefield 1, juego de disparos',
            'price' => 29.99,
            'category_id' => 1,
            'featured' => 0,
        ]);

        Product::create([
            'name' => 'Minecraft',
            'image' => 'img/ms_caratula.jpg',
            'description' => 'PC, Xbox, Nintendo y PlayStation disponible',
            'long_description' => 'Minecraft, una aventura divertida',
            'price' => 39.99,
            'category_id' => 1,
            'featured' => 0,
        ]);
    }
}
