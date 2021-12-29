<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'            => $this->faker->randomElement(User::all())->id,
            'company_id'         => $this->faker->randomElement(Company::all())->id,
            'message'            => $this->faker->randomHtml,
            'title'              => $this->faker->title
        ];
    }
}
