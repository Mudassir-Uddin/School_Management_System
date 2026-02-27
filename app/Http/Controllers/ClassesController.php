<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
     public function index()
    {
        $classes = \App\Models\Classes::all();
        $sections = \App\Models\Sections::all();
        $acdemic_years = \App\Models\Academic_years::all();
        return view('classes.index', compact('sections', 'classes', 'acdemic_years'));
    }

    public function create()
    {
        $sections = \App\Models\Sections::all();
        $acdemic_years = \App\Models\Academic_years::all();
        return view('classes.create', compact('sections', 'acdemic_years'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'section_id' => 'required|exists:sections,id',
            'academic_year_id' => 'required|exists:academic_years,id',
        ]);

        $class = new \App\Models\Classes();
        $class->name = $request->name;
        $class->section_id = $request->section_id;
        $class->academic_year_id = $request->academic_year_id;
        $class->save();

        return redirect('Classes')->with('success', 'Class created successfully.');
    }
    
    public function edit($id)
    {
        $class = \App\Models\Classes::find($id);
        $sections = \App\Models\Sections::all();
        $acdemic_years = \App\Models\Academic_years::all();
        return view('classes.edit', compact('class', 'sections', 'acdemic_years'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'section_id' => 'required|exists:sections,id',
            'academic_year_id' => 'required|exists:academic_years,id',
        ]);

        $class = \App\Models\Classes::find($id);
        $class->update($request->all());

        return redirect('Classes')
            ->with('success', 'Class updated successfully.');
    }

    public function destroy($id)
    {
        $class = \App\Models\Classes::find($id);
        $class->delete();

        return redirect('Classes')
            ->with('success', 'Class deleted successfully.');
    }
}
