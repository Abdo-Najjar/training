<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                  => $this->faker->name,
            'founder'               => $this->faker->name,
            'user_id'               => $this->faker->randomElement(User::all())->id,
            'employee_number'       => $this->faker->numberBetween(5, 100),
            'city'                  => $this->faker->city,
            'country'               => $this->faker->country
        ];
    }
}
