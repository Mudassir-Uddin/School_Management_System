<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClassSectionsController extends Controller
{
    //
    public function index()
    {
        $ClassSections = \App\Models\ClassSections::all();
        $classes = \App\Models\Classes::all();
        $sections = \App\Models\Sections::all();
        $acdemic_years = \App\Models\Academic_years::all();
        return view('class_section.index', compact('ClassSections', 'classes', 'sections', 'acdemic_years'));
    }

    public function create()
    {
        $classes = \App\Models\Classes::all();
        $sections = \App\Models\Sections::all();
        $acdemic_years = \App\Models\Academic_years::all();
        return view('class_section.create', compact('classes', 'sections', 'acdemic_years'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'section_id' => 'required|array',
            'section_id.*' => [
                'required',
                'exists:sections,id',
                Rule::unique('class_sections', 'section_id')->where(function ($query) use ($request) {
                    return $query->where('class_id', $request->class_id)
                        ->where('academic_year_id', $request->academic_year_id);
                }),
            ],
            'academic_year_id' => 'required|exists:academic_years,id',
        ]);

        foreach ($request->section_id as $section) {

            \App\Models\ClassSections::create([
                'class_id' => $request->class_id,
                'section_id' => $section,
                'academic_year_id' => $request->academic_year_id,
            ]);
        }

        return redirect('ClassSections')
            ->with('success', 'Class Section created successfully.');
    }


    public function edit($id)
{
    $ClassSections = \App\Models\ClassSections::findOrFail($id);

    $classes = \App\Models\Classes::all();
    $sections = \App\Models\Sections::all();
    $acdemic_years = \App\Models\Academic_years::all();

    $selectedSections = \App\Models\ClassSections::where('class_id', $ClassSections->class_id)
        ->where('academic_year_id', $ClassSections->academic_year_id)
        ->pluck('section_id')
        ->toArray();

    return view('class_section.edit', compact(
        'ClassSections',
        'classes',
        'sections',
        'acdemic_years',
        'selectedSections'
    ));
}

public function update(Request $request, $id)
{
    $classSection = \App\Models\ClassSections::findOrFail($id);

    $request->validate([
        'class_id' => 'required|exists:classes,id',
        'section_id' => 'required|array',
        'section_id.*' => 'exists:sections,id',
        'academic_year_id' => 'required|exists:academic_years,id',
    ]);

    // 🔥 Pehle purane sections delete karo
    \App\Models\ClassSections::where('class_id', $classSection->class_id)
        ->where('academic_year_id', $classSection->academic_year_id)
        ->delete();

    // 🔥 Ab naye sections insert karo
    foreach ($request->section_id as $section) {
        \App\Models\ClassSections::create([
            'class_id' => $request->class_id,
            'section_id' => $section,
            'academic_year_id' => $request->academic_year_id,
        ]);
    }

    return redirect()->route('ClassSections.index')
        ->with('success', 'Class Sections updated successfully');
}

    public function destroy($id)
    {
        $ClassSections = \App\Models\ClassSections::find($id);
        $ClassSections->delete();

        return redirect('ClassSections')
            ->with('success', 'Class-Section relationship deleted successfully.');
    }
}
