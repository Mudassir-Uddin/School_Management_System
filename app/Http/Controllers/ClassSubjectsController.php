<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassSubjectsController extends Controller
{
    //
     public function index()
    {
        $classsubjects = \App\Models\ClassSubjects::all();
        $classes = \App\Models\Classes::all();
        $subjects = \App\Models\Subjects::all();
        return view('class_subjects.index', compact('classsubjects', 'subjects', 'classes'));
    }

    public function create()
    {
        $classes = \App\Models\Classes::all();
        $subjects = \App\Models\Subjects::all();
        return view('class_subjects.create', compact('classes', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $classSubject = new \App\Models\ClassSubjects();
        $classSubject->class_id = $request->class_id;
        $classSubject->subject_id = $request->subject_id;
        $classSubject->save();

        return redirect('ClassSubjects')->with('success', 'Class-Subject relationship created successfully.');
    }
    
    public function edit($id)
    {
        $classSubject = \App\Models\ClassSubjects::find($id);
        $classes = \App\Models\Classes::all();
        $subjects = \App\Models\Subjects::all();
        return view('class_subjects.edit', compact('classSubject', 'classes', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $classSubject = \App\Models\ClassSubjects::find($id);
        $classSubject->class_id = $request->class_id;
        $classSubject->subject_id = $request->subject_id;
        $classSubject->save();

        return redirect('ClassSubjects')
            ->with('success', 'Class-Subject relationship updated successfully.');
    }

    public function destroy($id)
    {
        $classSubject = \App\Models\ClassSubjects::find($id);
        $classSubject->delete();

        return redirect('ClassSubjects')
            ->with('success', 'Class-Subject relationship deleted successfully.');
    }

}
