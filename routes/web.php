<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DepartmentController;


Route::get('/', function(){
    return "Home page";
});

Route::get('schools', [SchoolController::class, 'index'])->name('school.list');
Route::get('schools/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('schools/store', [SchoolController::class, 'store'])->name('school.store');
Route::get('schools/edit/{id}', [SchoolController::class, 'edit'])->name('school.edit');
Route::post('schools/update', [SchoolController::class, 'update'])->name('school.update');
Route::get('schools/delete/{id}', [SchoolController::class, 'delete'])->name('school.delete');
Route::post('schools/destroy', [SchoolController::class, 'destroy'])->name('school.destroy');


Route::get('departments', [DepartmentController::class, 'index'])->name('department.list');
Route::get('departments/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('departments/store', [DepartmentController::class, 'store'])->name('department.store');
Route::get('departments/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('departments/update', [DepartmentController::class, 'update'])->name('department.update');
Route::get('departments/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');
Route::post('departments/destroy', [DepartmentController::class, 'destroy'])->name('department.destroy');