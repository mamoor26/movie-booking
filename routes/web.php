<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\validuser;
use App\Http\Controllers\categoryController;
use App\Http\Middleware\userrole;
use App\Http\Controllers\userController;
use App\Http\Controllers\movieController;
use App\Http\Controllers\theaterController;
use App\Http\Controllers\showtimeController;

Route::get('/', function () {
    return view('welcome');
});

// register form view
Route::get("/auth/register",[authController::class,"register"])->name('registerform');

// login form view
Route::get("/auth/login",[authController::class,"login"])->name('loginform');
// userregister
Route::post("/auth/user/register",[authController::class,"userregister"])->name('userregister');
// userlogin

Route::post("/auth/user/login",[authController::class,"loginuser"])->name('loginuser');
// userwebsite
Route::get("/user/web",[userController::class,"index"])->name('userweb');
// adminspanel
Route::get("/admin/panel",[adminController::class,"index"])->name('adminpanel');
// addmovies

Route::get('/addmovies2904',function(){
    return view('admin.addmovies');
})->name('addnewmovies');

Route::get('/addtheater2342904',function(){
    return view('admin.addtheater');
})->name('addnewTeater');

// Route::get('/addshowtime2342904',function(){
//     return view('admin.screentime.addshoetime');
// })->name('addnewshowtime');


Route::resource('/movie', movieController::class);

// theaterwork
Route::resource('/theater', theaterController::class);

// showtime
Route::resource('/show', showtimeController::class);

// User Ticket Booking
Route::get('/ticket/{id}', [movieController::class, 'ticket'])->name('user.ticket');



