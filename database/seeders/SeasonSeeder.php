<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('season')->insert([
            'id' => 1,
            // Family Guy ID
            'media_id' => 1,
            // Family Guy S1
            'name' => "S1"
        ]);

    }
}
