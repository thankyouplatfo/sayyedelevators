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
            'welcome' => $this->faker->realText(50),
            'city_id' => $this->faker->numberBetween(1,10),
            'country_id' => $this->faker->numberBetween(1,10),
            'url' => $this->faker->url(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
