<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //title	unit	description	price	total
            'title'=>$this->faker->sentence(),
            'unit'=>$this->faker->randomElement(['kg','l','m','GB']),
            'description'=>$this->faker->paragraph(3),
            'price'=>$this->faker->numberBetween(1,5000),
            'total'=>$this->faker->numberBetween(100,1000),
            'category_id'=>$this->faker->numberBetween(100,10000),

        ];
    }
}
