<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'first_name' => "Sohaib",
            'last_name' => "LAFIFI",
            'email' => 'me@sohaibafifi.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
        ]);
    }
}
