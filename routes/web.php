<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboardindex');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/Sections', [App\Http\Controllers\SectionsController::class, 'index'])->name('Sections.index');
    Route::get('/SectionsInsert', [App\Http\Controllers\SectionsController::class, 'create'])->name('Sections.create');
    Route::post('/SectionsStore', [App\Http\Controllers\SectionsController::class, 'store'])->name('Sections.store');
    Route::get('/SectionsEdit/{id}', [App\Http\Controllers\SectionsController::class, 'edit'])->name('Sections.edit');
    Route::post('/SectionsUpdate/{id}', [App\Http\Controllers\SectionsController::class, 'update'])->name('Sections.update');
    Route::get('/SectionsDestroy/{id}', [App\Http\Controllers\SectionsController::class, 'destroy'])->name('Sections.destroy');

    Route::get('/Academic_years', [App\Http\Controllers\Academic_YearsController::class, 'index'])->name('Academic_years.index');
    Route::get('/Academic_yearsInsert', [App\Http\Controllers\Academic_YearsController::class, 'create'])->name('Academic_years.create');
    Route::post('/Academic_yearsStore', [App\Http\Controllers\Academic_YearsController::class, 'store'])->name('Academic_years.store');
    Route::get('/Academic_yearsEdit/{id}', [App\Http\Controllers\Academic_YearsController::class, 'edit'])->name('Academic_years.edit');
    Route::post('/Academic_yearsUpdate/{id}', [App\Http\Controllers\Academic_YearsController::class, 'update'])->name('Academic_years.update');
    Route::get('/Academic_yearsDestroy/{id}', [App\Http\Controllers\Academic_YearsController::class, 'destroy'])->name('Academic_years.destroy');

    Route::get('/Classes', [App\Http\Controllers\ClassesController::class, 'index'])->name('Classes.index');
    Route::get('/ClassesInsert', [App\Http\Controllers\ClassesController::class, 'create'])->name('Classes.create');
    Route::post('/ClassesStore', [App\Http\Controllers\ClassesController::class, 'store'])->name('Classes.store');
    Route::get('/ClassesEdit/{id}', [App\Http\Controllers\ClassesController::class, 'edit'])->name('Classes.edit');
    Route::post('/ClassesUpdate/{id}', [App\Http\Controllers\ClassesController::class, 'update'])->name('Classes.update');
    Route::get('/ClassesDestroy/{id}', [App\Http\Controllers\ClassesController::class, 'destroy'])->name('Classes.destroy');

    Route::get('/Subjects', [App\Http\Controllers\SubjectsController::class, 'index'])->name('Subjects.index');
    Route::get('/SubjectsInsert', [App\Http\Controllers\SubjectsController::class, 'create'])->name('Subjects.create');
    Route::post('/SubjectsStore', [App\Http\Controllers\SubjectsController::class, 'store'])->name('Subjects.store');
    Route::get('/SubjectsEdit/{id}', [App\Http\Controllers\SubjectsController::class, 'edit'])->name('Subjects.edit');
    Route::post('/SubjectsUpdate/{id}', [App\Http\Controllers\SubjectsController::class, 'update'])->name('Subjects.update');
    Route::get('/SubjectsDestroy/{id}', [App\Http\Controllers\SubjectsController::class, 'destroy'])->name('Subjects.destroy');

    Route::get('/ClassSubjects', [App\Http\Controllers\ClassSubjectsController::class, 'index'])->name('ClassSubjects.index');
    Route::get('/ClassSubjectsInsert', [App\Http\Controllers\ClassSubjectsController::class, 'create'])->name('ClassSubjects.create');
    Route::post('/ClassSubjectsStore', [App\Http\Controllers\ClassSubjectsController::class, 'store'])->name('ClassSubjects.store');
    Route::get('/ClassSubjectsEdit/{id}', [App\Http\Controllers\ClassSubjectsController::class, 'edit'])->name('ClassSubjects.edit');
    Route::post('/ClassSubjectsUpdate/{id}', [App\Http\Controllers\ClassSubjectsController::class, 'update'])->name('ClassSubjects.update');
    Route::get('/ClassSubjectsDestroy/{id}', [App\Http\Controllers\ClassSubjectsController::class, 'destroy'])->name('ClassSubjects.destroy');

    Route::get('/Parents', [App\Http\Controllers\ParentsController::class, 'index'])->name('Parents.index');
    Route::get('/ParentsInsert', [App\Http\Controllers\ParentsController::class, 'create'])->name('Parents.create');
    Route::post('/ParentsStore', [App\Http\Controllers\ParentsController::class, 'store'])->name('Parents.store');
    Route::get('/ParentsEdit/{id}', [App\Http\Controllers\ParentsController::class, 'edit'])->name('Parents.edit');
    Route::post('/ParentsUpdate/{id}', [App\Http\Controllers\ParentsController::class, 'update'])->name('Parents.update');
    Route::get('/ParentsDestroy/{id}', [App\Http\Controllers\ParentsController::class, 'destroy'])->name('Parents.destroy');

    Route::get('/Users', [App\Http\Controllers\UsersController::class, 'index'])->name('Users.index');
    Route::get('/UsersInsert', [App\Http\Controllers\UsersController::class, 'create'])->name('Users.create');
    Route::post('/UsersStore', [App\Http\Controllers\UsersController::class, 'store'])->name('Users.store');
    Route::get('/UsersEdit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('Users.edit');
    Route::post('/UsersUpdate/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('Users.update');
    Route::get('/UsersDestroy/{id}', [App\Http\Controllers\UsersController::class, 'destroy'])->name('Users.destroy');
    
    Route::get('/Students', [App\Http\Controllers\StudentsController::class, 'index'])->name('Students.index');
    Route::get('/StudentsInsert', [App\Http\Controllers\StudentsController::class, 'create'])->name('Students.create');
    Route::post('/StudentsStore', [App\Http\Controllers\StudentsController::class, 'store'])->name('Students.store');
    Route::get('/StudentsEdit/{id}', [App\Http\Controllers\StudentsController::class, 'edit'])->name('Students.edit');
    Route::post('/StudentsUpdate/{id}', [App\Http\Controllers\StudentsController::class, 'update'])->name('Students.update');
    Route::get('/StudentsDestroy/{id}', [App\Http\Controllers\StudentsController::class, 'destroy'])->name('Students.destroy');
    
    Route::get('/Student_enrollments', [App\Http\Controllers\Student_enrollmentsController::class, 'index'])->name('Student_enrollments.index');
    Route::get('/Student_enrollmentsInsert', [App\Http\Controllers\Student_enrollmentsController::class, 'create'])->name('Student_enrollments.create');
    Route::post('/Student_enrollmentsStore', [App\Http\Controllers\Student_enrollmentsController::class, 'store'])->name('Student_enrollments.store');
    Route::get('/Student_enrollmentsEdit/{id}', [App\Http\Controllers\Student_enrollmentsController::class, 'edit'])->name('Student_enrollments.edit');
    Route::post('/Student_enrollmentsUpdate/{id}', [App\Http\Controllers\Student_enrollmentsController::class, 'update'])->name('Student_enrollments.update');
    Route::get('/Student_enrollmentsDestroy/{id}', [App\Http\Controllers\Student_enrollmentsController::class, 'destroy'])->name('Student_enrollments.destroy');
    
    Route::get('/Teachers', [App\Http\Controllers\TeachersController::class, 'index'])->name('Teachers.index');
    Route::get('/TeachersInsert', [App\Http\Controllers\TeachersController::class, 'create'])->name('Teachers.create');
    Route::post('/TeachersStore', [App\Http\Controllers\TeachersController::class, 'store'])->name('Teachers.store');
    Route::get('/TeachersEdit/{id}', [App\Http\Controllers\TeachersController::class, 'edit'])->name('Teachers.edit');
    Route::post('/TeachersUpdate/{id}', [App\Http\Controllers\TeachersController::class, 'update'])->name('Teachers.update');
    Route::get('/TeachersDestroy/{id}', [App\Http\Controllers\TeachersController::class, 'destroy'])->name('Teachers.destroy');
    
    Route::get('/Teacher_assignments', [App\Http\Controllers\Teacher_assignmentsController::class, 'index'])->name('Teacher_assignments.index');
    Route::get('/Teacher_assignmentsInsert', [App\Http\Controllers\Teacher_assignmentsController::class, 'create'])->name('Teacher_assignments.create');
    Route::post('/Teacher_assignmentsStore', [App\Http\Controllers\Teacher_assignmentsController::class, 'store'])->name('Teacher_assignments.store');
    Route::get('/Teacher_assignmentsEdit/{id}', [App\Http\Controllers\Teacher_assignmentsController::class, 'edit'])->name('Teacher_assignments.edit');
    Route::post('/Teacher_assignmentsUpdate/{id}', [App\Http\Controllers\Teacher_assignmentsController::class, 'update'])->name('Teacher_assignments.update');
    Route::get('/Teacher_assignmentsDestroy/{id}', [App\Http\Controllers\Teacher_assignmentsController::class, 'destroy'])->name('Teacher_assignments.destroy');
    
    Route::get('/Parent_students', [App\Http\Controllers\Parent_studentsController::class, 'index'])->name('Parent_students.index');
    Route::get('/Parent_studentsInsert', [App\Http\Controllers\Parent_studentsController::class, 'create'])->name('Parent_students.create');
    Route::post('/Parent_studentsStore', [App\Http\Controllers\Parent_studentsController::class, 'store'])->name('Parent_students.store');
    Route::get('/Parent_studentsEdit/{id}', [App\Http\Controllers\Parent_studentsController::class, 'edit'])->name('Parent_students.edit');
    Route::post('/Parent_studentsUpdate/{id}', [App\Http\Controllers\Parent_studentsController::class, 'update'])->name('Parent_students.update');
    Route::get('/Parent_studentsDestroy/{id}', [App\Http\Controllers\Parent_studentsController::class, 'destroy'])->name('Parent_students.destroy');
});

require __DIR__ . '/auth.php';
