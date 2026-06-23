<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id(); // primary key, unique, auto increment

            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');

            $table->date('enrollment_date');
            $table->enum('status', ['active', 'completed', 'dropped'])->default('active');
            $table->decimal('grade', 5, 2)->nullable(); 

            $table->timestamps();

            $table->unique(['student_id', 'course_id']); //two foreign keys unique to
            // ensure that a student can only enroll in a course once 
            
            
            // prevents same student from enrolling in the same course twice
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};