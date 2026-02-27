<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboardindex');
})->name('dashboard');

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
