<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => 'Plataformas',
            'description' => 'Juegos para ordenadores, consolas como: Xbox, Nintendo
            , Playstation, etc'
        ]);
        Category::create([
            'id' => 2,
            'name' => 'Codigos',
            'description' => 'Codigos para ordenadores, consolas como: Xbox, Steam, Origin
            , Playstation, etc'
        ]);
    }
}
