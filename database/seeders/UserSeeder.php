<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'id' => 1,
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'johndoe@mail.com',
            'admin' => 0,
            'bank_details' => '123456789',
            'password' => '123456789'
        ]);
        DB::table('user')->insert([
            'id' => 2,
            'name' => 'Armando',
            'surname' => 'Bronca',
            'email' => 'armando@mail.com',
            'admin' => 1,
            'bank_details' => '123456789',
            'password' => '123456789'
        ]);

    }
}
