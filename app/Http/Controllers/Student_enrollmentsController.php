<?php

namespace App\Http\Controllers;

use \App\Models\User;
use \App\Models\Students;
use \App\Models\ClassSections;
use \App\Models\Academic_years;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \App\Models\Student_enrollments;


class Student_enrollmentsController extends Controller
{
    //
    public function index()
    {
        $St_Ens = Student_enrollments::all();
        return view('student_enrollments.index', compact('St_Ens'));
    }

    public function create()
    {
        $students = Students::all();
        $class_sections = ClassSections::all();
        $academic_years = Academic_years::all();
        return view('student_enrollments.create', compact('students', 'class_sections', 'academic_years'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id|unique:student_enrollments,student_id',
            'class_id' => 'required',
            'academic_year_id' => 'required',
            'admission_date' => 'required',
            'status' => 'required',
            'roll_number' => 'required|digits:10|starts_with:03|unique:student_enrollments,roll_number'
        ]);

        $St_En = new Student_enrollments();
        $St_En->student_id = $request->student_id;
        $St_En->class_id = $request->class_id;
        $St_En->academic_year_id = $request->academic_year_id;
        $St_En->admission_date = $request->admission_date;
        $St_En->status = $request->status;
        $St_En->roll_number = $request->roll_number;
        $St_En->save();

        return redirect('Student_enrollments')->with('success', 'Student Enrollments created successfully.');
    }

    public function edit($id)
    {
        $St_En = Student_enrollments::find($id);
        $students = Students::all();
        $class_sections = ClassSections::all();
        $academic_years = Academic_years::all();
        return view('student_enrollments.edit', compact('St_En', 'students', 'class_sections', 'academic_years'));
    }

    public function update(Request $request, $id)
    {
        $St_En = Student_enrollments::findOrFail($id);

        $validated = $request->validate([
            'student_id' => [
                'required',
                'exists:students,id',
                Rule::unique('student_enrollments', 'student_id')
                    ->ignore($St_En->id, 'id'),
            ],
            'class_id' => 'required',
            'academic_year_id' => 'required',
            'admission_date' => 'required|date',
            'status' => 'required',
            'roll_number' => [
                'required',
                'digits:10',
                'starts_with:03',
                Rule::unique('student_enrollments', 'roll_number')->ignore($St_En->id),
            ],

        ]);

        $St_En->update($validated);

        return redirect('Student_enrollments')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $St_En = Student_enrollments::find($id);
        $St_En->delete();

        return redirect('Student_enrollments')->with('success', 'Student Enrollments deleted successfully.');
    }
}
