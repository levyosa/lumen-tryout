<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory('\App\Models\Course::class',10)->create();
        \App\Models\Course::factory()->count(10)->create();
    }
}
