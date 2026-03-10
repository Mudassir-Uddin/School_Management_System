<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'today');

        // Classes Query
        $classQuery = \App\Models\Classes::query();

        // Teachers Query
        $teacherQuery = \App\Models\Teachers::query();

        // Students Query
        $studentQuery = \App\Models\Student_enrollments::query();

        // Subjects Query
        $subjectQuery = \App\Models\Subjects::query();

        if ($filter == 'today') {
            $classQuery->whereDate('created_at', Carbon::today());
            $teacherQuery->whereDate('created_at', Carbon::today());
            $studentQuery->whereDate('created_at', Carbon::today());
            $subjectQuery->whereDate('created_at', Carbon::today());
            $label = 'Today';
        } elseif ($filter == 'month') {
            $classQuery->whereMonth('created_at', Carbon::now()->month);
            $teacherQuery->whereMonth('created_at', Carbon::now()->month);
            $studentQuery->whereMonth('created_at', Carbon::now()->month);
            $subjectQuery->whereMonth('created_at', Carbon::now()->month);
            $label = 'This Month';
        } elseif ($filter == 'year') {
            $classQuery->whereYear('created_at', Carbon::now()->year);
            $teacherQuery->whereYear('created_at', Carbon::now()->year);
            $studentQuery->whereYear('created_at', Carbon::now()->year);
            $subjectQuery->whereYear('created_at', Carbon::now()->year);
            $label = 'This Year';
        }

        $classesFiltered = $classQuery->count();
        $teachersFiltered = $teacherQuery->count();
        $studentsFiltered = $studentQuery->count();
        $subjectsFiltered = $subjectQuery->count();

        // Totals
        $students = \App\Models\Student_enrollments::count();
        $teachers = \App\Models\Teachers::count();
        $classes = \App\Models\Classes::count();
        $subjects = \App\Models\Subjects::count();

        // Recent students (latest 10)
        $recentStudents = $studentQuery->orderBy('created_at', 'desc')->take(10)->get();

        return view('dashboardindex', compact(
            'students',
            'teachers',
            'classes',
            'subjects',
            'classesFiltered',
            'teachersFiltered',
            'studentsFiltered',
            'subjectsFiltered',
            'recentStudents',
            'label'
        ));
    }
}
