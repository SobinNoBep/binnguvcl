<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
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
    return view('backend.web.index');
})->name('home');

Route::get('dashboard/index', [DashboardController::class,'index'])->name
('dashboard.index')->middleware(AuthenticateMiddleware::class);
Route::get('user/index', [UserController::class,'index'])->name('user.index');
// ('user.index')->middleware('admin');
Route::get('login', [AuthController::class,'index'])->name('index')->middleware(LoginMiddleware::class);
Route::post('login',[AuthController::class,'login'])->name('auth.login');
Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');
// Route::get('home', [AuthController::class,'index'])->name('home');
