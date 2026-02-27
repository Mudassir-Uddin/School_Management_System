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