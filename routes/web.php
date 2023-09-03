<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SU_ConnectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[SU_ConnectController::class, 'index'])->name('home');

//Student Controller
Route::post('/student-registration',[StudentController::class, 'register'])->name('student.registration');
Route::post('/student-login',[StudentController::class, 'login'])->name('student.login');
Route::get('/student-dashboard',[StudentController::class, 'dashboard']);
Route::get('/student-profile',[StudentController::class, 'profile'])->name('student.profile');
Route::post('/student-profile-update/{id}',[StudentController::class, 'profileUpdate'])->name('student.profile.update');
Route::get('/student-dashboard/show.lecturer',[StudentController::class, 'showLecturer'])->name('show.lecturer');


//Lecturer Controller
Route::post('/lecturer-registration',[LecturerController::class, 'register'])->name('lecturer.registration');
Route::post('/lecturer-login',[LecturerController::class, 'login'])->name('lecturer.login');
Route::get('/lecturer-dashboard',[LecturerController::class, 'dashboard'])->name('lecturer.dashboard');
Route::get('/lecturer-profile',[LecturerController::class, 'profile'])->name('lecturer.profile');
Route::post('/lecturer-profile-update/{id}',[LecturerController::class, 'profileUpdate'])->name('lecturer.profile.update');





Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/edit-profile', [DashboardController::class, 'profileEdit'])->name('adminProfile-edit');

    Route::get('/dashboard/manage-lecturer', [DashboardController::class, 'manageLecturer'])->name('manage.lecturer');
    Route::get('/dashboard/add-lecturer', [DashboardController::class, 'addLecturer'])->name('add.lecturer');


    Route::get('/dashboard/manage-student', [DashboardController::class, 'manageStudent'])->name('manage.student');
    Route::post('/dashboard/category-student', [DashboardController::class, 'categoryStudent'])->name('manage.student.category');




});
