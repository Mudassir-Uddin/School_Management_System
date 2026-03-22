<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClassesController extends Controller
{
    //
     public function index()
    {
        $classes = \App\Models\Classes::all();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:classes,name'
        ]);

        $class = new \App\Models\Classes();
        $class->name = $request->name;
        $class->save();

        return redirect('Classes')->with('success', 'Class created successfully.');
    }
    
    public function edit($id)
    {
        $class = \App\Models\Classes::find($id);
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $class = \App\Models\Classes::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                Rule::unique('classes', 'name')->ignore($class->id),
            ],
        ]);

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
