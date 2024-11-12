<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ForgotPassword;
use App\Livewire\Home;
use App\Http\Middleware\UserMiddleware;
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


Route::get('/login', Login::class)->name('login');
Route::get('/forgot_password', ForgotPassword::class)->name('forgot_password');
Route::get('/register', Register::class)->name('register');
Route::get('/home', Home::class)->middleware(UserMiddleware::class)->name('home');

Route::get('/logout', function () {
    Session::flush();
    return redirect('/login');
});