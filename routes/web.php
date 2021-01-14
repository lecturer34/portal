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
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\GroupLecturerController;
use App\Http\Controllers\RankController;


//Route::get('/', [LoginController::class, 'showLoginForm']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('university', [SchoolController::class, 'index'])->name('university.schools');
Route::resource('schools', SchoolController::class);
Route::get('school/{school}', [DepartmentController::class, 'index'])->name('school.departments');

Route::resource('departments', DepartmentController::class);
Route::get('department/{department}', [CourseController::class, 'index'])->name('department.courses');

Route::resource('courses', CourseController::class);
Route::get('course/{course}', [GroupController::class, 'index'])->name('course.groups');

Route::resource('groups', GroupController::class);
Route::get('group/{group}/schedule', [ScheduleController::class, 'index'])->name('group.schedules');
Route::get('group/{group}/lecturer', [GroupLecturerController::class, 'index'])->name('group.lecturers');

Route::resource('schedules', ScheduleController::class);

Route::post('group/{group}/lecturer/create', [GroupLecturerController::class, 'store'])->name('group.lecturers.create');
Route::post('group/{group}/lecturer/delete', [GroupLecturerController::class, 'destroy'])->name('group.lecturer.delete');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/venue', [VenueController::Class,'index'])->name('venue.list');
Route::resource('venues', VenueController::class);

Route::get('/employee', [EmployeeController::Class,'index'])->name('employee.list');
Route::resource('employees', EmployeeController::class);


Route::get('getdepartments/{school_id}', function($school_id){
    return getDepartments($school_id);
})->name('get.departments');

Route::get('getlecturers/{department_id}', function($department_id){
    return getLecturers($department_id);
})->name('get.lecturers');


Route::get('/rank', [RankController::Class,'index'])->name('rank.list');
Route::resource('ranks', RankController::class);

Route::get('getvenues/{department_id}', function($department_id){
    return getVenues($department_id);
})->name('get.venues');


