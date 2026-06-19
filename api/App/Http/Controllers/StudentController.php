<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // GET: Return all students
    public function index()
    {
        $students = [
            ['id' => 1, 'name' => 'Ahmad', 'major' => 'Computer Science'],
            ['id' => 2, 'name' => 'Lina', 'major' => 'Software Engineering'],
            ['id' => 3, 'name' => 'Sama', 'major' => 'Data Science'],
            ['id' => 4, 'name' => 'Khalid', 'major' => 'Data Science']
        ];

        return response()->json($students);
    }

    // GET: Return one student by ID
    public function show($id)
    {
        $students = [
            ['id' => 1, 'name' => 'Ahmad', 'major' => 'Computer Science'],
            ['id' => 2, 'name' => 'Lina', 'major' => 'Software Engineering'],
            ['id' => 3, 'name' => 'Sama', 'major' => 'Data Science']
        ];

        foreach ($students as $student) {
            if ($student['id'] == $id) {
                return response()->json($student);
            }
        }

        return response()->json([
            'message' => 'Student not found'
        ], 404);
    }

    // POST: Create a new student
    public function store(Request $request)
    {
        $newStudent = [
            'id' => 4,
            'name' => $request->name,
            'major' => $request->major
        ];

        return response()->json([
            'message' => 'Student created successfully',
            'student' => $newStudent
        ], 201);
    }

    // PUT: Update a student
    public function update(Request $request, $id)
    {
        $updatedStudent = [
            'id' => $id,
            'name' => $request->name,
            'major' => $request->major
        ];

        return response()->json([
            'message' => 'Student updated successfully',
            'student' => $updatedStudent
        ]);
    }

    // PATCH: Update part of a student
    public function partialUpdate(Request $request, $id)
    {
        return response()->json([
            'message' => 'Student partially updated successfully',
            'student_id' => $id,
            'updated_data' => $request->all()
        ]);
    }

    // DELETE: Delete a student
    public function destroy($id)
    {
        $students = [
            ['id' => 1, 'name' => 'Ahmad', 'major' => 'Computer Science'],
            ['id' => 2, 'name' => 'Lina', 'major' => 'Software Engineering'],
            ['id' => 3, 'name' => 'Sama', 'major' => 'Data Science']
        ];

        $updatedStudents = [];

        foreach ($students as $student) {
            if ($student['id'] != $id) {
                $updatedStudents[] = $student;
            }
        }

        return response()->json([
            'message' => 'Student deleted successfully',
            'deleted_student_id' => $id,
            'remaining_students' => $updatedStudents
        ]);
    }
}


