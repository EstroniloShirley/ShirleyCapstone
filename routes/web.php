<?php
use App\Http\Controllers\AppointmentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create-mon', [AppointmentController::class, 'create'])->name('appointments.create-mon');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

//Show Edit Form
Route::get('/appointments/{appointments}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
