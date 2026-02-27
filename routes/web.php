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