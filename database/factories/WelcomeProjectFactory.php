<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WelcomeProjectFactory extends Factory
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
            'path' => $this->faker->imageUrl(1500, 800, null, config('app.name'), null, false),
            'alt' => $this->faker->realText(255),
        ];
    }
}
