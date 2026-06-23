<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Laravel Backend Development',
            'description' => 'Learn backend development using Laravel.',
            'credit_hours' => 3,
            'instructor_name' => 'Sama Khraim',
        ]);

        Course::create([
            'name' => 'Database Fundamentals',
            'description' => 'Learn MySQL database basics and relationships.',
            'credit_hours' => 3,
            'instructor_name' => 'Sama Khraim',
        ]);

        Course::create([
            'name' => 'API Development',
           'description' => 'Learn how to build and test REST APIs.',
            'credit_hours' => 2,
            'instructor_name' => 'Sama Khraim',
        ]);
    }
}