<?php

namespace Database\Factories;
use app\models\address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
/// street_name	street_num	city	country	postcode	state
            'street_name'=> $this->faker->streetName(),
            'street_num'=> $this->faker->numberBetween(),
            'city'=> $this->faker->city(),
            'country'=> $this->faker->country(),
            'postcode'=> $this->faker->postCode(),
            'state'=> $this->faker->state(),

        ];
    }
}
