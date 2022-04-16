<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abdullah al Faisal',
            'email' => 'a.a.faisal00@gmail.com',
            'password' => '12345', 
        ]);

        User::create([
            'name' => 'faisal ',
            'email' => 'abdullahallfaisal1@gmail.com',
            'password' => '12345', 
        ]);
    }
}
