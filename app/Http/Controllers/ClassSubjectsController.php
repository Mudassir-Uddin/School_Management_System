<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ClassSubjectsController extends Controller
{
    public function index()
    {
        $ClassSubject = \App\Models\ClassSubjects::with([
            'classSection.class',
            'classSection.section',
            'subject'
        ])->get();

        return view('class_subject.index', compact('ClassSubject'));
    }

    public function create()
    {
        $ClassSection = \App\Models\ClassSections::with(['class', 'section'])->get();
        $subjects = \App\Models\Subjects::all();

        return view('class_subject.create', compact('ClassSection', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_section_id' => 'required|exists:class_sections,id',
            'subject_id' => 'required|array|min:1',
            'subject_id.*' => 'exists:subjects,id',
        ]);

        // 🔥 duplicate check
        $existing = \App\Models\ClassSubjects::where('class_section_id', $request->class_section_id)
            ->whereIn('subject_id', $request->subject_id)
            ->pluck('subject_id')
            ->toArray();

        if (count($existing)) {
            $names = \App\Models\Subjects::whereIn('id', $existing)
                ->pluck('name')
                ->join(', ');

            return back()->withErrors([
                'subject_id' => "Already assigned: $names"
            ])->withInput();
        }

        foreach ($request->subject_id as $subject) {
            \App\Models\ClassSubjects::create([
                'class_section_id' => $request->class_section_id,
                'subject_id' => $subject,
            ]);
        }

        return redirect()->route('ClassSubjects.index')
            ->with('success', 'Subjects assigned successfully.');
    }

    public function edit($id)
    {
        $ClassSubject = \App\Models\ClassSubjects::findOrFail($id);

        $ClassSection = \App\Models\ClassSections::with(['class', 'section'])->get();
        $subjects = \App\Models\Subjects::all();

        // us class ke sare subjects
        $selectedSubjects = \App\Models\ClassSubjects::where('class_section_id', $ClassSubject->class_section_id)
            ->pluck('subject_id')
            ->toArray();

        return view('class_subject.edit', compact(
            'ClassSubject',
            'ClassSection',
            'subjects',
            'selectedSubjects'
        ));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'class_section_id' => 'required|exists:class_sections,id',
            'subject_id' => 'required|array',
            'subject_id.*' => 'exists:subjects,id',
        ]);

        // purane delete
        \App\Models\ClassSubjects::where('class_section_id', $request->class_section_id)->delete();

        // naye insert
        foreach ($request->subject_id as $subject) {

            \App\Models\ClassSubjects::create([
                'class_section_id' => $request->class_section_id,
                'subject_id' => $subject
            ]);
        }

        return redirect()->route('ClassSubjects.index')
            ->with('success', 'Subjects updated successfully');
    }


    public function destroy($id)
    {
        $ClassSections = \App\Models\ClassSubjects::find($id);
        $ClassSections->delete();


        return redirect()->route('ClassSubjects.index')
            ->with('success', 'Deleted successfully');
    }
}
