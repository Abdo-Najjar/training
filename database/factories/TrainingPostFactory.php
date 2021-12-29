<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingPostFactory extends Factory
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
            'specialization_id'  => $this->faker->randomElement(Specialization::all())->id,
            'content'            => $this->faker->randomHtml,
            'type'               => random_int(1, 2),
            'title'              => $this->faker->title
        ];
    }
}
