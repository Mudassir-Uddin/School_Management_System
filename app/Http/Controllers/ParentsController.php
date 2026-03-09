<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ParentsController extends Controller
{
    //
    public function index()
    {
        $parents = \App\Models\Parents::all();
        return view('parents.index', compact('parents'));
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'father_name' => 'required',
            'mother_name' => 'nullable',
            'phone' => 'required|digits:11|starts_with:03|unique:parents,phone',
        ]);

        $parent = new \App\Models\Parents();
        $parent->father_name = $request->father_name;
        $parent->mother_name = $request->mother_name;
        $parent->phone = $request->phone;
        $parent->save();

        return redirect('/Parents')
            ->with('success', 'Parent created successfully.');
    }

    public function edit($id)
    {
        $parent = \App\Models\Parents::findOrFail($id);
        return view('parents.edit', compact('parent'));
    }

    public function update(Request $request, $id)
    {
        $parent = \App\Models\Parents::findOrFail($id);

        $request->validate([
            'father_name' => 'required',
            'mother_name' => 'nullable',
            'phone' => [
                'required',
                'digits:11',
                'starts_with:03',
                Rule::unique('parents', 'phone')->ignore($parent->id),
            ],
        ]);

        $parent->update($request->all());

        return redirect('/Parents')
            ->with('success', 'Parent updated successfully.');
    }

    public function destroy($id)
    {
        $parent = \App\Models\Parents::find($id);
        $parent->delete();

        return redirect('/Parents')->with('success', 'Parent deleted successfully.');
    }
}
