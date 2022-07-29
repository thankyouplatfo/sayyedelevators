<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommunicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'welcome_phrase' => $this->faker->realText(50),
            'city_id' => $this->faker->numberBetween(1,90),
            'country_id' => $this->faker->numberBetween(1,200),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
