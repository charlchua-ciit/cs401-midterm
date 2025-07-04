<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $courses = Course::all();
        foreach (range(1, 20) as $_) {
            Schedule::factory()->create([
                'course_id' => $courses->random()->id,
            ]);
        }
    }
}
