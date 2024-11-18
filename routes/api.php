<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreatmentController; 
use App\Http\Controllers\UserController; 
use App\Http\Controllers\AppointmentController; 
use App\Http\Controllers\PaymentController; 
use App\Http\Controllers\DentistController; 


Route::group(['prefix' => 'treatment'], function () {
    Route::get('/', [TreatmentController::class, 'get_all_treatment']);
    Route::get('/{id}', [TreatmentController::class, 'get_treatment']);
});

Route::group(['prefix' => 'user'], function () {
    Route::post('register', [UserController::class, 'register_user']);
    Route::get('email/{email}', [UserController::class, 'view_user_email']);
    Route::get('/{id}', [UserController::class, 'view_user_id']);
    Route::post('login', [UserController::class, 'login_user']);
    Route::put('edit/{id}', [UserController::class, 'update_user']);
});

Route::group(['prefix' => 'appointment'], function () {
    Route::post('add', [AppointmentController::class, 'add_appoint']);
    Route::get('list', [AppointmentController::class, 'list_appoint']);
    Route::get('list/{id}', [AppointmentController::class, 'list_appoint_user']);
    Route::put('/edit/{id}', [AppointmentController::class, 'edit_appoint']);
});

Route::group(['prefix' => 'payment'], function () {
    Route::get('list', [PaymentController::class, 'getAllPayments']);
    Route::get('list/{userId}', [PaymentController::class, 'getPaymentsByUserId']);
    Route::post('add', [PaymentController::class, 'addPayment']);
});

Route::group(['prefix' => 'dentist'], function () {
    Route::get('/', [DentistController::class, 'get_all_dentist']);
    Route::get('/{id}', [DentistController::class, 'get_dentist']);
});

