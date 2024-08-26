<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemasSeeder extends Seeder
{
    public function run()
    {
        DB::table('temas')->insert([
            ['nombre' => 'Anime', 'slug' => 'anime', 'categoria_id' => 1],
            ['nombre' => 'Hentai', 'slug' => 'hentai', 'categoria_id' => 1],
            ['nombre' => 'Manga', 'slug' => 'manga', 'categoria_id' => 1],
            ['nombre' => 'Sailor Moon', 'slug' => 'sailor-moon', 'categoria_id' => 1],
            ['nombre' => 'Juegos Retro', 'slug' => 'juegos-retro', 'categoria_id' => 2],
            ['nombre' => 'PC Gaming', 'slug' => 'pc-gaming', 'categoria_id' => 2],
            ['nombre' => 'Smartphones', 'slug' => 'smartphones', 'categoria_id' => 3],
        ]);
    }
}
