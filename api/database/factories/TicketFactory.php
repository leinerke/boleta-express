<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_id' => rand(1, 10),
            'name' => $this->faker->sentence,
            'stock' => $this->faker->numberBetween(50, 200),
            'is_active' => rand(0, 1)
        ];
    }
}
