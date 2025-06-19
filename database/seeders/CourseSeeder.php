<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teachers = Teacher::all();
        $students = Student::all();
        foreach(range(1, 10) as $_) {
            Course::factory()->create([
                'teacher_id' => $teachers->random()->id,
            ]);
        }
        
        $courses = Course::all();
        foreach ($students as $student) {
            $randomCourses = $courses->random(rand(1, 3))->pluck('id');
            $student->courses()->attach($randomCourses);
        }
    }
}
