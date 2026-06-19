<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'first_name' => 'Ahmad',
                'last_name' => 'Khalil',
                'email' => 'ahmad.khalil@example.com',
                'phone_number' => '0599000001',
                'gender' => 'male',
                'date_of_birth' => '2001-05-12',
                'address' => 'Ramallah, Palestine',
                'age' => 23,
                'major' => 'Computer Science',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Lina',
                'last_name' => 'Nasser',
                'email' => 'lina.nasser@example.com',
                'phone_number' => '0599000002',
                'gender' => 'female',
                'date_of_birth' => '2002-03-18',
                'address' => 'Nablus, Palestine',
                'age' => 22,
                'major' => 'Software Engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Omar',
                'last_name' => 'Saleh',
                'email' => 'omar.saleh@example.com',
                'phone_number' => '0599000003',
                'gender' => 'male',
                'date_of_birth' => '2000-11-25',
                'address' => 'Hebron, Palestine',
                'age' => 24,
                'major' => 'Information Technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Sama',
                'last_name' => 'Khraim',
                'email' => 'sama.khraim@example.com',
                'phone_number' => '0599000004',
                'gender' => 'female',
                'date_of_birth' => '2001-09-08',
                'address' => 'Jenin, Palestine',
                'age' => 23,
                'major' => 'Data Science',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Noor',
                'last_name' => 'Hassan',
                'email' => 'noor.hassan@example.com',
                'phone_number' => '0599000005',
                'gender' => 'other',
                'date_of_birth' => '2003-01-30',
                'address' => 'Bethlehem, Palestine',
                'age' => 21,
                'major' => 'Cyber Security',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}