<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\teacher_assignments;
use \App\Models\Academic_years;
use App\Models\ClassSubjects;
use App\Models\Teachers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class Teacher_assignmentsController extends Controller
{
    //
    public function index()
    {
        $teacher_assignments = Teacher_assignments::all();
        return view('Teacher_assignments.index', compact('teacher_assignments'));
    }

    public function create()
    {
        $teachers = Teachers::all();
        $class_subjects = ClassSubjects::all();
        $academic_years = Academic_years::all();
        return view('Teacher_assignments.create', compact('class_subjects', 'academic_years', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required',
            'class_subject_id' => 'required|array',
            'academic_year_id' => 'required',
        ]);

        foreach ($request->class_subject_id as $cs_id) {

            $exists = \App\Models\Teacher_assignments::where('class_subject_id', $cs_id)
                ->where('academic_year_id', $request->academic_year_id)
                ->exists();

            if (!$exists) {

                \App\Models\Teacher_assignments::create([
                    'teacher_id' => $request->teacher_id,
                    'class_subject_id' => $cs_id,
                    'academic_year_id' => $request->academic_year_id,
                ]);
            }
        }

        return redirect('Teacher_assignments')
            ->with('success', 'Teacher assigned successfully.');
    }

    public function edit($id)
    {
        $teacher_assignments = Teacher_assignments::find($id);
        $class_subjects = ClassSubjects::all();
        $teachers = Teachers::all();
        $academic_years = Academic_years::all();
        return view('Teacher_assignments.edit', compact('teacher_assignments', 'class_subjects', 'teachers', 'academic_years'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'teacher_id' => 'required',
            'class_subject_ids' => 'required|array',
            'academic_year_id' => 'required',
        ]);

        $teacher_assignment = \App\Models\Teacher_assignments::findOrFail($id);

        // Purane assignments delete (old teacher id se)
        \App\Models\Teacher_assignments::where('teacher_id', $teacher_assignment->teacher_id)
            ->where('academic_year_id', $teacher_assignment->academic_year_id)
            ->delete();

        // Naye assignments insert
        foreach ($request->class_subject_ids as $cs_id) {

            $exists = \App\Models\Teacher_assignments::where('class_subject_id', $cs_id)
                ->where('academic_year_id', $request->academic_year_id)
                ->exists();

            if (!$exists) {
                \App\Models\Teacher_assignments::create([
                    'teacher_id' => $request->teacher_id,
                    'class_subject_id' => $cs_id,
                    'academic_year_id' => $request->academic_year_id,
                ]);
            }
        }

        return redirect('Teacher_assignments')
            ->with('success', 'Teacher assignment updated successfully.');
    }
    
    public function destroy($id)
    {
        $teacher_assignments = Teacher_assignments::find($id);
        $teacher_assignments->delete();

        return redirect('Teacher_assignments')->with('success', 'Students deleted successfully.');
    }
}
