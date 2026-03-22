<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SectionsController extends Controller
{
    //
    public function index()
    {
        $sections = \App\Models\Sections::all();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        return view('sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sections,name',
        ]);

        $section = new \App\Models\Sections();
        $section->name = $request->name;
        $section->save();

        return redirect('Sections')->with('success', 'Section created successfully.');
    }

    public function edit($id)
    {
        $section = \App\Models\Sections::find($id);
        return view('sections.edit', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $section = \App\Models\Sections::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'name' => [
                'required',
                Rule::unique('sections', 'name')->ignore($section->id),
            ],
        ]);

        $section->update($request->all());

        return redirect('Sections')
            ->with('success', 'Section updated successfully.');
    }

    public function destroy($id)
    {
        $section = \App\Models\Sections::find($id);
        $section->delete();

        return redirect('Sections')
            ->with('success', 'Section deleted successfully.');
    }
}