<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Anime y Manga', 'slug' => 'anime-y-manga'],
            ['nombre' => 'Videojuegos', 'slug' => 'videojuegos'],
            ['nombre' => 'Tecnología', 'slug' => 'tecnologia'],
        ]);
    }
}
