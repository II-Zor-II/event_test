<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $username = $this->faker->firstName;
//        return [
//            'username' => $username,
//            'password' => Hash::make($username),
//            'api_token' =>  Str::random(60), // unhashed api_token
//        ];
    }
}
