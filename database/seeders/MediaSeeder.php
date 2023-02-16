<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            'id' => 1,
            'genre_id' => 1,
            'title' => "The Godfather",
            'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
            'duration' => 175,
            'type' => 1
        ]);
        DB::table('media')->insert([
            'id' => 2,
            'genre_id' => 2,
            'title' => "Family Guy S1E1",
            'description' => 'Peter Griffin and his family of two teenagers, a smart dog, a devilish baby and his wife find themselves in some of the most hilarious scenarios.',
            'duration' => 22,
            'type' => 2
        ]);

    }
}
