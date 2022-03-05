<?php

namespace Database\Factories;
use App\Models\Order;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;
    
    public function definition()
    {
        return [
            'details'      => $this->faker->sentences(4, true),
            'client'       => $this->faker->name(),
            'is_fulfilled' => $this->faker->boolean(),
        ];
    }
}
