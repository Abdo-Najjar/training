<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'               => $this->faker->randomElement(User::all())->id,
            'company_id'            => $this->faker->randomElement(Company::all())->id,
            'reason'                => $this->faker->sentence()
        ];
    }
}
