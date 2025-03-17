<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/home', function(){
    return view('home');
})->name('page.home');


Route::get('/history', function(){
    return view('history');
})->name('page.history');


Route::get('/majors', function(){
    return view('majors');
})->name('page.majors');


Route::get('/reserve', function(){
    return view('doctors.reserve');
})->name('page.reserve');


Route::get('/login', function(){
    return view('login');
})->name('page.login');


Route::get('/register', function(){
    return view('register');
})->name('page.register');

Route::get('/contact', function(){
    return view('contact');
})->name('page.contact');


Route::get('/doctors', function(){
    return view('doctors.doctors');
})->name('page.doctors');


































