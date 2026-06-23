<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    // GET: Return all students
    public function index()
    {
        $students = Student::all();//fetch all students from the database using Eloquent ORM

        return response()->json($students);
    }

    // GET: Return one student by ID
    public function show($id)
    {
        // Eloquent query: SELECT * FROM students WHERE id = ?
        $student = Student::find($id);
        
        if (!$student) {//validation to check if the student exists
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        return response()->json($student);
    }


    // POST: Create a new student
     public function store(Request $request)
    {
        // Mass assignment using fillable fields from the model
        $student = Student::create([//
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'age' => $request->age,
            'major' => $request->major,
        ]);

        return response()->json([
            'message' => 'Student created successfully',
            'student' => $student
        ], 201);
    }


    // PUT: Update a student
     public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        $student->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'age' => $request->age,
            'major' => $request->major,
        ]);

        return response()->json([
            'message' => 'Student updated successfully',
            'student' => $student
        ]);
    }

    public function partialUpdate(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        $student->update($request->only([
            'first_name',
            'last_name',
            'email',
            'phone_number',
            'gender',
            'date_of_birth',
            'address',
            'age',
            'major',
        ]));

        return response()->json([
            'message' => 'Student partially updated successfully',
            'student' => $student
        ]);
    }

     // DELETE: Delete a student
    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully',
            'deleted_student_id' => $id
        ]);
    }
}


