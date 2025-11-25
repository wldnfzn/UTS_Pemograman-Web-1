<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Web\ServiceWebController;
use App\Http\Controllers\Web\ContactWebController;
use App\Http\Controllers\AuthController;

Route::get('/', [PageController::class,'home'])->name('home');
Route::get('/about', [PageController::class,'about'])->name('about');

Route::get('/services', [ServiceWebController::class,'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceWebController::class,'show'])->name('services.show');

Route::get('/contact', [ContactWebController::class,'show'])->name('contact.show');
Route::post('/contact', [ContactWebController::class,'submit'])->name('contact.submit');


// AUTH
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');