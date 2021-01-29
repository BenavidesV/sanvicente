<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'name' => "Jose",
            'email' => 'benavidesvarela@gmail.com',
            'password' => Hash::make('tester123'),
            'admin'=> true,
        ]);
    }
}
