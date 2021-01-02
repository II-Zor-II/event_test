<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\User::factory(5)->create();

        //default user for testing
//        DB::table('users')->insert([
//            'username' => 'admin',
//            'password' => Hash::make('admin'),
//            'api_token' =>  Str::random(60),
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now()
//        ]);

        $emp = Employee::factory(10)
            ->has(Project::factory()->count(1))
            ->create();

        $client = Client::factory(10)
            ->create();

        $emp = Employee::factory(10)
            ->create();

        $projectWithoutForeignIds = Project::factory(5)
            ->create(['employee_id' => null, 'client_id' => null]);
    }
}
