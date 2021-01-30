<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'identification' =>'12312300',
            'admin'=> true,
        ]);
      DB::table('users')->insert([
              'name' => "Novlic",
              'email' => 'tecnologianovlic@gmail.com',
              'password' => Hash::make('tester123'),
              'identification' =>'12312307',
              'admin'=> true,
          ]);
    }
}
