<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapter')->insert([
            'id' => 1,
            // Season ID
            'season_id' => 1,
            // Media ID
            'media_id' => 2,
            // Title
            'title' => "S1E1 The griffins"
        ]);
    }
}
