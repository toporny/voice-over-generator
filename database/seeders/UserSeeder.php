<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'username' => 'toporny',
        //     'email' => 'toporny@gmail.com',
        //     'password' => Hash::make('rzeprrzepr99')
        // ]);
        DB::table('users')->insert([
            'username' => 'rzepr',
            'email' => 'rzepr@termagroup.pl',
            'password' => Hash::make('rzeprrzepr99'),
        ]);


    }
}
