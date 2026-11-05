<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\userController;
use App\Http\Controllers\movieController;
use App\Http\Controllers\theaterController;
use App\Http\Controllers\showtimeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;


// Home
Route::get('/', function () {
    return view('welcome');
});


// Register and Login
Route::get('/auth/register', [authController::class, 'register'])
    ->name('registerform');

Route::get('/auth/login', [authController::class, 'login'])
    ->name('loginform');

Route::post('/auth/user/register', [authController::class, 'userregister'])
    ->name('userregister');

Route::post('/auth/user/login', [authController::class, 'loginuser'])
    ->name('loginuser');

// Logout
Route::post('/auth/logout', [authController::class, 'logout'])
    ->name('logout');


// User Website
Route::get('/user/web', [userController::class, 'index'])
    ->name('userweb');


// Admin Panel
Route::get('/admin/panel', [adminController::class, 'index'])
    ->name('adminpanel');

Route::get('/addmovies2904', function () {
    return view('admin.addmovies');
})->name('addnewmovies');

Route::get('/addtheater2342904', function () {
    return view('admin.addtheater');
})->name('addnewTeater');


// Admin CRUD Routes
Route::resource('/movie', movieController::class);
Route::resource('/theater', theaterController::class);
Route::resource('/show', showtimeController::class);


// Movie Ticket Page
Route::get('/ticket/{id}', [movieController::class, 'ticket'])
    ->name('user.ticket');


// Booking & Review Routes (only for logged in users)
Route::middleware('auth')->group(function () {

    // Save Booking
    Route::post('/booking/store', [BookingController::class, 'store'])
        ->name('booking.store');

    // My Bookings
    Route::get('/my-bookings', [BookingController::class, 'index'])
        ->name('my.bookings');

    // Booking Confirmation
    Route::get('/booking/{id}/confirmation', [BookingController::class, 'show'])
        ->name('booking.confirmation');

    // Save Review / Rating
    Route::post('/review/store', [ReviewController::class, 'store'])
        ->name('review.store');

});