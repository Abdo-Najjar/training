<?php

namespace Database\Seeders;

use App\Models\SpecializationType;
use Illuminate\Database\Seeder;

class SpecializationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpecializationType::factory()->count(3)->create();
    }
}
