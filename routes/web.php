<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

date_default_timezone_set('Asia/Jakarta');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('customers.index', [
        'title' => 'Booking Meeting Rooms',
        'nvb'=> 'home'
    ]);
});

Route::get('/about', function () {
    return view('customers.about.index', [
        'title' => 'About',
        'nvb' => 'about'
    ]);
});

Route::get('/rooms', [Customer\RoomController::class, 'index']);
Route::get('/packages', [Customer\PackageController::class, 'index']);

Route::get('/admin', [Admin\DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login/req', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout']);