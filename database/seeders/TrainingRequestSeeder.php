<?php

namespace Database\Seeders;

use App\Models\TrainingRequest;
use Illuminate\Database\Seeder;

class TrainingRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainingRequest::factory()->count(20)->create();
    }
}
