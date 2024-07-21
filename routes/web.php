<?php

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
    return view('welcome');
});
Route::get('/Dhigyjgj', function () {
    echo"My name is dhiraj chaudhary";
})->name('user.login');
Route::get('/college', function () {
   echo"Welcome to birgunj institute of technology";
})->name('create.login');
Route::get('/Admin', function () {
    return view('Admin.dashboard');
});
