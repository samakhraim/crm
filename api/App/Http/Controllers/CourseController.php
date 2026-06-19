<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // GET: Return all courses
    public function index()
    {
        $courses = [
            ['id' => 1, 'name' => 'Backend Development', 'teacher' => 'Mr. Ahmad', 'hours' => 24],
            ['id' => 2, 'name' => 'Frontend Development', 'teacher' => 'Ms. Lina', 'hours' => 30],
            ['id' => 3, 'name' => 'Database Basics', 'teacher' => 'Mr. Omar', 'hours' => 18]
        ];

        return response()->json($courses);
    }

    // GET: Return one course by ID
    public function show($id)
    {
        $courses = [
            ['id' => 1, 'name' => 'Backend Development', 'teacher' => 'Mr. Ahmad', 'hours' => 24],
            ['id' => 2, 'name' => 'Frontend Development', 'teacher' => 'Ms. Lina', 'hours' => 30],
            ['id' => 3, 'name' => 'Database Basics', 'teacher' => 'Mr. Omar', 'hours' => 18]
        ];

        foreach ($courses as $course) {
            if ($course['id'] == $id) {
                return response()->json($course);
            }
        }

        return response()->json([
            'message' => 'Course not found'
        ], 404);
    }

    // POST: Create a new course
    public function store(Request $request)
    {
        $newCourse = [
            'id' => 4,
            'name' => $request->name,
            'teacher' => $request->teacher,
            'hours' => $request->hours
        ];

        return response()->json([
            'message' => 'Course created successfully',
            'course' => $newCourse
        ], 201);
    }

    // PUT: Update a course
    public function update(Request $request, $id)
    {
        $updatedCourse = [
            'id' => $id,
            'name' => $request->name,
            'teacher' => $request->teacher,
            'hours' => $request->hours
        ];

        return response()->json([
            'message' => 'Course updated successfully',
            'course' => $updatedCourse
        ]);
    }

    // PATCH: Update part of a course
    public function partialUpdate(Request $request, $id)
    {
        return response()->json([
            'message' => 'Course partially updated successfully',
            'course_id' => $id,
            'updated_data' => $request->all()
        ]);
    }

    // DELETE: Delete a course
    public function destroy($id)
    {
        $courses = [
            ['id' => 1, 'name' => 'Backend Development', 'teacher' => 'Mr. Ahmad', 'hours' => 24],
            ['id' => 2, 'name' => 'Frontend Development', 'teacher' => 'Ms. Lina', 'hours' => 30],
            ['id' => 3, 'name' => 'Database Basics', 'teacher' => 'Mr. Omar', 'hours' => 18]
        ];

        $updatedCourses = [];

        foreach ($courses as $course) {
            if ($course['id'] != $id) {
                $updatedCourses[] = $course;
            }
        }

        return response()->json([
            'message' => 'Course deleted successfully',
            'deleted_course_id' => $id,
            'remaining_courses' => $updatedCourses
        ]);
    }
}