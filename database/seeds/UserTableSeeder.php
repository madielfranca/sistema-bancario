<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        'name' => 'Madiel franca',
        'email' => 'madielfranca@gmail.com',
        'password' => bcrypt('1571'),
    }
}
