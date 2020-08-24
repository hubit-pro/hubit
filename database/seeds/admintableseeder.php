<?php

use Illuminate\Database\Seeder;
use App\User;

class admintableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        admins::create([
            'fullname' => 'HUB IT GROUP PVT LTD',
            'email'    => 'info@hubit.com.np',
            'password' => Hash::make('45414!@#$%^hubit98570'),
            
        ]);
    }
}
