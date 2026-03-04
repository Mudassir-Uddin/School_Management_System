<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Students;
use \App\Models\User;
use Illuminate\Validation\Rule;

class StudentsController extends Controller
{
    //
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $users = User::all();
        return view('students.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id|unique:students,user_id',
            'admission_date' => 'required',
            'dob' => 'required|date|before:today',
            'gender' => 'required',
            'status' => 'required'
        ]);

        $student = new Students();
        $student->user_id = $request->user_id;
        $student->admission_date = $request->admission_date;
        $student->dob = $request->dob;
        $student->gender = $request->gender;
        $student->status = $request->status;
        $student->save();

        return redirect('Students')->with('success', 'Students created successfully.');
    }

    public function edit($id)
    {
        $students = Students::find($id);
        $users = User::all();
        return view('students.edit', compact('students', 'users'));
    }

    public function update(Request $request, $id)
    {
        $student = Students::findOrFail($id);

        $validated = $request->validate([
            'user_id' => [
                'required',
                'exists:users,id',
                Rule::unique('students', 'user_id')
                    ->ignore($student->id, 'id'),
            ],
            'admission_date' => 'required|date',
            'dob' => 'required|date|before:today',
            'gender' => 'required',
            'status' => 'required'
        ]);

        $student->update($validated);

        return redirect('Students')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $students = Students::find($id);
        $students->delete();

        return redirect('Students')->with('success', 'Students deleted successfully.');
    }
}
