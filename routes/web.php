<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Models\Clinic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('/');

Route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('about',function () {
    return view('about');
})->name('about');
 


        Route::post('create_clinic',[DoctorController::class,'create_clinic'])->name('create_clinic');
        Route::post('add_work',[DoctorController::class,'add_work'])->name('add_work');
        Route::get('update_work_page/{id}',[DoctorController::class,'update_work_page'])->name('update_work_page');
        Route::post('update_work/{id}',[DoctorController::class,'update_work'])->name('update_work');
        Route::get('delete_work/{id}',[DoctorController::class,'delete_work'])->name('delete_work');
        Route::get('update_image_work_page/{id}',[DoctorController::class,'update_image_work_page'])->name('update_image_work_page');
        Route::post('update_image_work/{id}',[DoctorController::class,'update_image_work'])->name('update_image_work');
        Route::get('schedule_page',[DoctorController::class,'schedule_page'])->name('schedule_page');
        Route::post('schedule_dates',[DoctorController::class,'schedule_dates'])->name('schedule_dates');
        Route::get('booking_date/{id}/{date_of_inspection}',[DoctorController::class,'booking_date'])->name('booking_date');
        Route::get('appointments_page',[DoctorController::class,'appointments_page'])->name('appointments_page');
        Route::get('accept_booking/{id}',[DoctorController::class,'accept_booking'])->name('accept_booking');
        Route::get('patients_page',[DoctorController::class,'patients_page'])->name('patients_page');
        Route::get('cancellation_of_reservation/{id}',[DoctorController::class,'cancellation_of_reservation'])->name('cancellation_of_reservation');
        Route::get('product_page',[DoctorController::class,'product_page'])->name('product_page');
        Route::get('add_product_page',[DoctorController::class,'add_product_page'])->name('add_product_page');
        Route::post('add_product_d',[DoctorController::class,'add_product'])->name('add_product_d'); 
        Route::get('update_product_page/{id}',[DoctorController::class,'update_product_page'])->name('update_product_page');
        Route::post('update_product/{id}',[DoctorController::class,'update_product'])->name('update_product');
        Route::get('delete_product/{id}',[DoctorController::class,'delete_product'])->name('delete_product');
        Route::get('carts_page',[DoctorController::class,'carts_page'])->name('carts_page');
        Route::get('accept_cart/{id}',[DoctorController::class,'accept_cart'])->name('accept_cart');
        Route::get('refuse_cart/{id}',[DoctorController::class,'refuse_cart'])->name('refuse_cart');
        Route::get('delete_cart/{id}',[DoctorController::class,'delete_cart'])->name('delete_cart');

        //-------------------------------------------------------------------------------------------------------------------------------------------------

        Route::get('clinics_page',[PatientController::class,'clinics_page'])->name('clinics_page'); 
        Route::get('get_special_clinics/{medical_specialty}',[PatientController::class,'get_special_clinics'])->name('get_special_clinics');
        Route::get('doctor_clinic/{id}',[PatientController::class,'doctor_clinic'])->name('doctor_clinic');
        Route::post('reservation_date_page/{id}',[PatientController::class,'reservation_date_page'])->name('reservation_date_page');
        Route::get('reservation_date/{date_id}/{clinic_id}',[PatientController::class,'reservation_date'])->name('reservation_date');
        Route::get('my_dates_page',[PatientController::class,'my_dates_page'])->name('my_dates_page');
        Route::get('cancellation_of_reservation_by_patient/{id}',[PatientController::class,'cancellation_of_reservation_by_patient'])->name('cancellation_of_reservation_by_patient');
        Route::post('add_product/{product_id}/{clinic_id}',[PatientController::class,'add_product'])->name('add_product');
        Route::get('cart_page',[PatientController::class,'cart_page'])->name('cart_page');
        Route::get('cancellation_product_by_patient/{id}',[PatientController::class,'cancellation_product_by_patient'])->name('cancellation_product_by_patient');
        
















require __DIR__.'/auth.php';
