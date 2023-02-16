<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historial')->insert([
            'id' => 1,
            // John Doe
            'user_id' => 1,
            // El Padrino
            'media_id' => 1,
            // Fecha de hoy
            'date_watched' => date('Y-m-d')

        ]);
        DB::table('historial')->insert([
            'id' => 2,
            // Armando
            'user_id' => 2,
            // family guy
            'media_id' => 2,
            // fecha de ayer,
            'date_watched' => date('Y-m-d', strtotime('-1 day'))
        ]);

    }
}
