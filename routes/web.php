<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\webPages;
use App\Http\Middleware\admin as MiddlewareAdmin;
use App\Http\Middleware\appointment;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [webPages::class, 'home']);
Route::get('/about', [webPages::class, 'about']);
Route::get('/contact', [webPages::class, 'contact']);
Route::get('/privacy-policy', [webPages::class, 'privacyPolicy']);
Route::get('/services', [webPages::class, 'services']);
Route::get('/appointment', [webPages::class, 'appointment'])->middleware(appointment::class);
Route::post('/appointment', [webPages::class, 'store_appointment'])->name('appointment');

// admin routes
Route::middleware([MiddlewareAdmin::class])->group(function () {
    Route::get('/admin', [admin::class, 'home'])->middleware(MiddlewareAdmin::class);
    Route::get('/admin/appointments/requests', [admin::class, 'new_appointments']);
    Route::get('/admin/appointments/accepted', [admin::class, 'accepted_appointments']);
    Route::get('/admin/appointments/completed', [admin::class, 'completed_appointments']);
    Route::post('admin/appointment/accept/{id}', [admin::class, 'accept_appointments']);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
