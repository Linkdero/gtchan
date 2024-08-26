<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            ['titulo' => 'Mi anime favorito', 'contenido' => 'Mi anime favorito es...', 'tema_id' => 1],
            ['titulo' => 'Nuevo manga lanzado', 'contenido' => 'Hay un nuevo manga...', 'tema_id' => 3],
            ['titulo' => 'Guía de PC Gaming 2024', 'contenido' => 'Esta es la guía...', 'tema_id' => 6],
        ]);
    }
}
