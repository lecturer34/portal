<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;


Route::get('university', [SchoolController::class, 'index'])->name('university.schools');
Route::resource('schools', SchoolController::class);
Route::get('school/{school}', [DepartmentController::class, 'index'])->name('school.departments');

Route::resource('departments', DepartmentController::class);
Route::get('department/{department}', [CourseController::class, 'index'])->name('department.courses');

Route::resource('courses', CourseController::class);
Route::get('course/{course}', [GroupController::class, 'index'])->name('course.groups');

Route::resource('groups', GroupController::class);
