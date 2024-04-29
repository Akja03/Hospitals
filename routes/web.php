<?php

use App\Http\Controllers\HospitalController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AppointmenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('/hospital', Hospitalcontroller::class);
Route::resource('/location', Locationcontroller::class);
Route::resource('/appointmen', Appointmencontroller::class);
Route::resource('/category', Categorycontroller::class);
Route::resource('/patient', Patientcontroller::class);
