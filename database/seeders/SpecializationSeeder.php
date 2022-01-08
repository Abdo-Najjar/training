<?php

namespace Database\Seeders;

use App\Models\Specialization;
use App\Models\User;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialization::factory()->count(20)->create();
    }
}
