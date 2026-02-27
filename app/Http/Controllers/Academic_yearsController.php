<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academic_years;

class Academic_yearsController extends Controller
{
    //
    public function index()
    {
        $academic_years = Academic_years::all();
        return view('academic_years.index', compact('academic_years'));
    }

    public function create()
    {
        return view('academic_years.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:academic_years,name',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'required|boolean',
        ]);

        Academic_years::create($request->all());
        return redirect('/Academic_years')->with('success', 'Academic year created successfully.');
    }

    public function edit($id)
    {
        $academic_years = Academic_years::find($id);
        return view('academic_years.edit', compact('academic_years'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'boolean',
        ]);
        $academic_year = Academic_years::find($id);
        $academic_year->name = $request->name;
        $academic_year->start_date = $request->start_date;
        $academic_year->end_date = $request->end_date;
        $academic_year->status = $request->status;

        $academic_year->save();

        return redirect('/Academic_years')->with('success', 'Academic year updated successfully.');
    }

    public function destroy($id)
    {
        $academic_year = Academic_years::find($id);
        $academic_year->delete();
        return redirect('/Academic_years')->with('success', 'Academic year deleted successfully.');
    }
}
