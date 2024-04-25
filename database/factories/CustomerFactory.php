<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->company,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->name(5),
            'postal_code' => $this->faker->postcode
        ];
    }
}