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
Route::get('/pregnant-man', function () {
    return view('pregnant-man');
})->name('pregnant_man');
Route::get('/safe-travels', function () {
    return view('safe-travels');
})->name('save_travels');
