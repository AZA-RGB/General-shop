<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\review>
 */
class reviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string,
     */
    public function definition()
    {
        return [
            //,'product_id','review','stars'
            'user_id'=>$this->faker->unique()->numberBetween(1,372),
            'product_id'=>$this->faker->numberBetween(1,1500),
            'review'=>$this->faker->paragraph(),
            'stars'=>$this->faker->numberBetween(1,5),

        ];
    }
}
