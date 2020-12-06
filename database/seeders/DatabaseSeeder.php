<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        //default user for testing
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'api_token' =>  Str::random(60),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
