<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
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
            'name' => $this->faker->sentence,
            'description' => $this->faker->text(800),
            'image' => $this->faker->imageUrl(1280, 720),
            'event_date' => $this->faker->dateTimeBetween('now', '+1 years'),
            'is_active' => rand(0, 1)
        ];
    }
}
