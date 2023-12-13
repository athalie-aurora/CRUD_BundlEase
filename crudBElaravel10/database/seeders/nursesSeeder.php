<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nurse;


class NursesSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Nurse::factory()->count(1000)->create();
    }
}
