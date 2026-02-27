<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    //
    public function index()
    {
        $subjects = \App\Models\Subjects::all();
        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:subjects,name',
        ]);

        \App\Models\Subjects::create($request->all());

        return redirect('/Subjects')
            ->with('success', 'Subject created successfully.');
    }

    public function edit($id)
    {
        $subject = \App\Models\Subjects::findOrFail($id);
        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:subjects,name,',
        ]);

        $subject = \App\Models\Subjects::findOrFail($id);
        $subject->update($request->all());

        return redirect('/Subjects')
            ->with('success', 'Subject updated successfully.');
    }

    public function destroy($id)
    {
        $subject = \App\Models\Subjects::find($id);
        $subject->delete();

        return redirect('/Subjects')->with('success', 'Subject deleted successfully.');
    }
}
