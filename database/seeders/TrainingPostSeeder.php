<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainingPost;

class TrainingPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainingPost::factory()->count(20)->create();
    }
}
