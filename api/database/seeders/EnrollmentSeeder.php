<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enrollment::create([
            'student_id' => 1,
            'course_id' => 1,
            'enrollment_date' => now(),
            'status' => 'active',
            'grade' => null,
        ]);

        Enrollment::create([
            'student_id' => 1,
            'course_id' => 2,
            'enrollment_date' => now(),
            'status' => 'active',
            'grade' => null,
        ]);

        Enrollment::create([
            'student_id' => 2,
            'course_id' => 1,
            'enrollment_date' => now(),
            'status' => 'completed',
            'grade' => 88.50,
        ]);

        Enrollment::create([
            'student_id' => 3,
            'course_id' => 3,
            'enrollment_date' => now(),
            'status' => 'active',
            'grade' => null,
        ]);
    }
}