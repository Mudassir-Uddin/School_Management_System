<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\Student_enrollments;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Parent_studentsController extends Controller
{
    //
    public function index()
    {
        $parent_students = \App\Models\Parent_students::all();
        $parents = \App\Models\Parents::all();
        $student_enrollments = \App\Models\Student_enrollments::all();
        return view('parent_students.index', compact('parents', 'student_enrollments', 'parent_students'));
    }

    public function create()
    {
        $parents = \App\Models\Parents::all();
        $student_enrollments = Student_enrollments::with('student.user', 'class.section')->get();
        return view('parent_students.create', compact('parents', 'student_enrollments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required|exists:parents,id',
            'student_id' => 'required|exists:student_enrollments,id|unique:parent_students,student_id',
        ]);
        $parentStudents = new \App\Models\Parent_students();
        $parentStudents->parent_id = $request->parent_id;
        $parentStudents->student_id = $request->student_id;
        $parentStudents->save();

        return redirect('Parent_students')->with('success', 'Class-Subject relationship created successfully.');
    }

    public function edit($id)
    {
        $parentStudents = \App\Models\Parent_students::with('student.class.section')->findOrFail($id);
        $student_enrollments = \App\Models\Student_enrollments::with('student.user', 'class.section')->get();
        $parents = \App\Models\Parents::all();
        return view('parent_students.edit', compact('parentStudents', 'parents', 'student_enrollments'));
    }

    public function update(Request $request, $id)
    {
        $parentStudents = \App\Models\Parent_students::find($id);

        $validated = $request->validate([
            'parent_id' => 'required|exists:parents,id',
            'student_id' => [
                'required',
                'exists:student_enrollments,id',
                Rule::unique('parent_students', 'student_id')
                    ->ignore($parentStudents->id, 'id'),
            ],
        ]);

        $parentStudents->update($validated);

        return redirect('Parent_students')
            ->with('success', 'Class-Subject relationship updated successfully.');
    }

    public function destroy($id)
    {
        $parentStudents = \App\Models\Parent_students::find($id);
        $parentStudents->delete();

        return redirect('Parent_students')
            ->with('success', 'Class-Subject relationship deleted successfully.');
    }
}
