<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreatmentController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\AppointmentController; 


Route::group(['prefix' => 'treatment'], function () {
    Route::get('/', [TreatmentController::class, 'get_all_treatment']);
    Route::get('/{id}', [TreatmentController::class, 'get_treatment']);
});

Route::group(['prefix' => 'user'], function () {
    Route::post('register', [UserController::class, 'register_user']);
    Route::get('email/{email}', [UserController::class, 'view_user_email']);
    Route::get('/{id}', [UserController::class, 'view_user_id']);
    Route::post('login', [UserController::class, 'login_user']);
});

Route::group(['prefix' => 'appointment'], function () {
    Route::post('add', [AppointmentController::class, 'add_appoint']);
    Route::get('list', [AppointmentController::class, 'list_appoint']);
});

