<?php

use App\Http\Controllers\AidController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserprofileController;
use App\Http\Controllers\UsersController;

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

Auth::routes();


// admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/feedbacks', [FeedbacksController::class, 'index'])->name('feedbacks');

// user
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/post', [PostController::class, 'index'])->name('createpost');
Route::get('/equipment', [EquipmentsController::class, 'index'])->name('equipment');
Route::get('/aid', [AidController::class, 'index'])->name('aid');
Route::get('/loan', [LoanController::class, 'index'])->name('loan');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/Userprofile', [UserprofileController::class, 'index'])->name('userprofile');
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
Route::get('/feeds', [FeedbacksController::class, 'create'])->name('feeds');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

Route::get('/message', [MessageController::class, 'index'])->name('message');