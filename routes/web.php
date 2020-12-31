<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;


Route::get('/', function(){
    return "Home menu";
});

Route::get('schools', [SchoolController::class, 'index'])->name('school.list');
Route::get('schools/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('schools/store', [SchoolController::class, 'store'])->name('school.store');
Route::get('schools/edit/{id}', [SchoolController::class, 'edit'])->name('school.edit');
Route::post('schools/update', [SchoolController::class, 'update'])->name('school.update');
Route::get('schools/delete/{id}', [SchoolController::class, 'delete'])->name('school.delete');
Route::post('schools/destroy', [SchoolController::class, 'destroy'])->name('school.destroy');
