<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            'id' => 1,
            'name' => 'Drama'
        ]);
        DB::table('genre')->insert([
            'id' => 2,
            'name' => 'Comedy'
        ]);

    }
}
