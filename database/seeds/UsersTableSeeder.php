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
            'email'     =>  'robin@gmail.com',
            'password'  => bcrypt('12345'),
            'phone_number'=> '01775236985',
            'address'    => 'Bogura',
            'role'      => 'admin',
            'email_verified_at' => now()
        ]);
    }
}
