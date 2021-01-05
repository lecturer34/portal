<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EmployeeController;

Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('university', [SchoolController::class, 'index'])->name('university.schools');
Route::resource('schools', SchoolController::class);
Route::get('school/{school}', [DepartmentController::class, 'index'])->name('school.departments');

Route::resource('departments', DepartmentController::class);
Route::get('department/{department}', [CourseController::class, 'index'])->name('department.courses');

Route::resource('courses', CourseController::class);
Route::get('course/{course}', [GroupController::class, 'index'])->name('course.groups');

Route::resource('groups', GroupController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/dropdown', function(){
    return view('dropdown');
});

Route::get('/venue', [VenueController::Class,'index'])->name('venue.list');
Route::resource('venues', VenueController::class);

Route::get('/employee', [EmployeeController::Class,'index'])->name('employee.list');
Route::resource('employees', EmployeeController::class);

