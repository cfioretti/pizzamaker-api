<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pizzamaker',
            'email' => 'info@pizzamaker.app',
            'password' => Hash::make('password'),
        ]);
    }
}