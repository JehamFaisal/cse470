<?php

use App\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hasg;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
           'name' => 'faisal',
            'email' => 'admin@admin.com',
            'password' =>Hash::make ('admin12345'),
        ]);
    }
}
