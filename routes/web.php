<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiubizPaymentController;
use App\Http\Controllers\PaymentController;

/*Niubiz*/
Route::post('niubiz-success/{appointment_id}/{_token}', [NiubizPaymentController::class, 'success'])->name('niubiz-success');
Route::get('niubiz/{appointment_id}', [NiubizPaymentController::class, 'viewNiubiz'])->name('view-niubiz');

Route::get('payment-success', [PaymentController::class, 'success'])->name('payment-success');
Route::get('payment-fail', [PaymentController::class, 'fail'])->name('payment-fail');
Route::get('payment-alreadyPaid', [PaymentController::class, 'alreadyPaid'])->name('payment-alreadyPaid');
