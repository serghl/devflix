<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecomendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recomendation')->insert([
            'id' => 1,
            // El Padrino
            'media_id' => 1,
            // John Doe
            'user_id' => 1
        ]);
        DB::table('recomendation')->insert([
            'id' => 2,
            // family guy
            'media_id' => 2,
            // Armando
            'user_id' => 2
        ]);

    }
}
