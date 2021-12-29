<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CompanySeeder::class,
            ReportSeeder::class,
            SpecializationTypeSeeder::class,
            SpecializationSeeder::class,
            TrainingPostSeeder::class,
            TrainingRequestSeeder::class
        ]);
    }
}
