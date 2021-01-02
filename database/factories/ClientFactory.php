<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;


class ClientFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(1, 80),
            'email' => $this->faker->email,
            'contact_number' => $this->faker->phoneNumber,
            'address' => $this->faker->address
        ];
    }
}
