<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'phone' => 'required|numeric',
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
        $request->validate([
            'father_name' => 'required',
            'mother_name' => 'nullable',
            'phone' => 'required|numeric',
        ]);

        $parent = \App\Models\Parents::findOrFail($id);
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
