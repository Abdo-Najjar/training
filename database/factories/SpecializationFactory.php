<?php

namespace Database\Factories;

use App\Models\SpecializationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecializationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                              => $this->faker->name,
            'specialization_type_id'            => $this->faker->randomElement(SpecializationType::all())->id,
        ];
    }
}
