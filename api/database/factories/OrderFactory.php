<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'ticket_id' => rand(1, 50),
            'sold_out' => $this->faker->numberBetween(1, 10),
        ];
    }
}
