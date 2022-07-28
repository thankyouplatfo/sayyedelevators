<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionRoleFactory extends Factory
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
            'permission_id' => $this->faker->numberBetween(1, 3),
            'role_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
