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
        Schema::create('student_enrollments', function (Blueprint $table) {
            $table->id();

            // 🔹 Relationships
            $table->foreignId('student_id')
                ->constrained('students')
                ->cascadeOnDelete();

            $table->foreignId('class_id')
                ->constrained('classes')
                ->cascadeOnDelete();

            $table->foreignId('academic_year_id')
                ->constrained('academic_years')
                ->cascadeOnDelete();

            // 🔹 Admission Info
            $table->date('admission_date');

            // 🔹 Optional Status (Professional Touch)
            $table->enum('status', ['Active', 'Promoted', 'Transferred', 'Left'])
                ->default('Active');

            // 🔹 Roll Number (Very Important in Schools)
            $table->string('roll_number')->nullable();

            $table->timestamps();

            // 🔥 Unique Constraints
            $table->unique(['student_id', 'academic_year_id'], 'student_year_unique');

            // 🔥 Prevent duplicate roll number in same class/year
            $table->unique(
                ['class_id', 'academic_year_id', 'roll_number'],
                'class_year_roll_unique'
            );

            // 🔥 Indexes for performance
            $table->index('student_id');
            $table->index('class_id');
            $table->index('academic_year_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_enrollments');
    }
};
