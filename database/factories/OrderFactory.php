<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition()
    {
        return [
            'details'      => $this->faker->sentences(4, true),
            'client'       => $this->faker->name(),
            'is_fulfilled' => $this->faker->boolean(),
        ];
    }
}
