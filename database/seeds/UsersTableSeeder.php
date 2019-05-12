<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'full_name' => 'Fajle Rabbi',
            'email'     =>  'fajle7149@gmail.com',
            'password'  => bcrypt('12345'),
            'mobile_number'=> '01880508027',
            'address'    => 'Bogura',
            'role'      => 'admin',
            'email_verified_at' => now()
        ]);
    }
}
