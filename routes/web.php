<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SU_ConnectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\StudentComplainController;



//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/',[SU_ConnectController::class, 'index'])->name('home');

//Student Controller
Route::post('/student-registration',[StudentController::class, 'register'])->name('student.registration');
Route::post('/student-login',[StudentController::class, 'login'])->name('student.login');
Route::get('/student-dashboard',[StudentController::class, 'dashboard'])->name('student.dashboard');
Route::get('/student-profile',[StudentController::class, 'profile'])->name('student.profile');
Route::post('/student-profile-update/{id}',[StudentController::class, 'profileUpdate'])->name('student.profile.update');
Route::get('/student-dashboard/show.lecturer',[StudentController::class, 'showLecturer'])->name('show.lecturer');

Route::get('/student-dashboard/complain-form',[StudentComplainController::class, 'complainForm'])->name('student.complain.form');
Route::post('/student-dashboard/add-complain',[StudentComplainController::class, 'addComplain'])->name('student.add.complain');
Route::get('/student-dashboard/add-complain',[StudentComplainController::class, 'manageComplain'])->name('student.manage.complain');


//Lecturer Controller
Route::post('/lecturer-registration',[LecturerController::class, 'register'])->name('lecturer.registration');
Route::post('/lecturer-login',[LecturerController::class, 'login'])->name('lecturer.login');
Route::get('/lecturer-dashboard',[LecturerController::class, 'dashboard'])->name('lecturer.dashboard');
Route::get('/lecturer-profile',[LecturerController::class, 'profile'])->name('lecturer.profile');
Route::post('/lecturer-profile-update/{id}',[LecturerController::class, 'profileUpdate'])->name('lecturer.profile.update');
//Uploading File
Route::get('/lecturer/create-file',[FileUploadController::class, 'index'])->name('create.file');
Route::post('/lecturer/upload-file',[FileUploadController::class, 'uploadFile'])->name('upload.file');
Route::get('/lecturer/show-post',[FileUploadController::class, 'showPost'])->name('show.post');
//Announcement

Route::get('/dashboard/announcement-form', [AnnouncementController::class, 'index'])->name('announcement.form');
Route::post('/dashboard/add-announcement', [AnnouncementController::class, 'addAnnouncement'])->name('add.announcement');
Route::get('/dashboard/manage-announcement', [AnnouncementController::class, 'manageAnnouncement'])->name('manage.announcement');






Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/profile', [DashboardController::class, 'showProfile'])->name('admin.profile');
    Route::get('/dashboard/edit-profile', [DashboardController::class, 'profileEdit'])->name('adminProfile-edit');

    Route::get('/dashboard/manage-lecturer', [DashboardController::class, 'manageLecturer'])->name('manage.lecturer');
    Route::get('/dashboard/add-lecturer', [DashboardController::class, 'addLecturer'])->name('add.lecturer');
    Route::get('/dashboard/manage-lecturer/{id}', [DashboardController::class, 'status'])->name('lecturer.status');


    Route::get('/dashboard/manage-student', [DashboardController::class, 'manageStudent'])->name('manage.student');
    Route::post('/dashboard/category-student', [DashboardController::class, 'categoryStudent'])->name('manage.student.category');




});
