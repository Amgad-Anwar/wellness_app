<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'active_at' => now(),
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('admin'),
                    'two_step' => false,
                    'last_login_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(10),
                ),

        ));

    }
}
