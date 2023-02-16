<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      
        $this->call([GenreSeeder::class]);
        $this->call([MediaSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([RecomendationSeeder::class]);
        $this->call([HistorialSeeder::class]);
        $this->call([MovieSeeder::class]);
        $this->call([SeasonSeeder::class]);
        $this->call([ChapterSeeder::class]);

    }
}
