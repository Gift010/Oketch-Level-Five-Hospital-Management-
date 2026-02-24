<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('home.index');
});
Route::get('/home', [AdminController::class,'index'])->name('home');


Route::middleware(['auth'])->group(function () {

    Route::get('/doctor/dashboard', [DoctorController::class, 'dashboard'])
        ->name('doctor.dashboard');

    Route::put('/patients/{id}', [DoctorController::class, 'updatePatient'])
        ->name('patients.update');
});
Route::get('/patient/dashboard', [PatientController::class, 'dashboard'])
    ->middleware('auth')
    ->name('patient.dashboard');


//Admin
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.index');

    // Patients
    Route::get('/patients', [AdminController::class, 'patients'])
        ->name('admin.patients');
    Route::get('/patients/create', [AdminController::class, 'createPatient'])
        ->name('admin.patients.create');
    Route::post('/patients', [AdminController::class, 'storePatient'])
        ->name('admin.patients.store');

    // Doctors
    Route::get('/doctors', [AdminController::class, 'doctors'])
        ->name('admin.doctors');

    // Users
    Route::get('/users', [AdminController::class, 'users'])
        ->name('admin.users');
    Route::post('/users', [AdminController::class, 'storeUser'])
        ->name('admin.users.store');

    // Billing
    Route::get('/bills', [AdminController::class, 'bills'])
        ->name('admin.bills');
    Route::get('/bills/create', [AdminController::class, 'createBill'])
        ->name('admin.bills.create');
    Route::post('/bills', [AdminController::class, 'storeBill'])
        ->name('admin.bills.store');

    Route::post('/bills/{bill}/items', [AdminController::class, 'addBillItem'])
        ->name('admin.bills.items');

    Route::post('/bills/{bill}/pay', [AdminController::class, 'recordPayment'])
        ->name('admin.bills.pay');
});
