<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use \App\Models\Teachers;
use \App\Models\User;
use Illuminate\Validation\Rule;

class TeachersController extends Controller
{
    //
    public function index()
    {
        $Teachers = Teachers::all();
        return view('Teachers.index', compact('Teachers'));
    }

    public function create()
    {
        $users = User::all();
        return view('Teachers.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id|unique:teachers,user_id|unique:students,user_id',
            'qualification' => 'required',
            'experience_years' => 'required',
            'joining_date' => 'required',
            'salary' => 'required',
        ]);

        $Teachers = new Teachers();
        $Teachers->user_id = $request->user_id;
        $Teachers->qualification = $request->qualification;
        $Teachers->experience_years = $request->experience_years;
        $Teachers->joining_date = $request->joining_date;
        $Teachers->salary = $request->salary;
        $Teachers->save();

        return redirect('Teachers')->with('success', 'Teachers created successfully.');
    }

    public function edit($id)
    {
        $Teachers = Teachers::find($id);
        $users = User::all();
        return view('Teachers.edit', compact('Teachers','users'));
    }

    public function update(Request $request, $id)
    {
        $Teachers = Teachers::findOrFail($id);

        $validated = $request->validate([
            'user_id' => [
                'required',
                'exists:users,id',
                Rule::unique('teachers', 'user_id')
                    ->ignore($Teachers->id, 'id'),
                Rule::unique('students', 'user_id')
                    ->ignore($Teachers->id, 'id'),
            ],
            'qualification' => 'required',
            'experience_years' => 'required',
            'joining_date' => 'required',
            'salary' => 'required',
            
        ]);

        $Teachers->update($validated);

        return redirect('Teachers')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $Teachers = Teachers::find($id);
        $Teachers->delete();

        return redirect('Teachers')->with('success', 'Teachers deleted successfully.');
    }
}
