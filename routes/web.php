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
Route::get('/peaceful-resistance', function () {
    return view('peaceful');
})->name('peaceful');

Route::get('/pregnancy-break', function () {
    return view('pregnancy-break');
})->name('pregnancy_break');
Route::get('/national-pride', function () {
    return view('national-pride');
})->name('national_pride');
Route::get('/construct-a-fiefdom', function () {
    return view('fiefdom');
})->name('fiefdom');

Route::get('/worry-free-pregnancy', function () {
    return view('worry-free-pregnancy');
})->name('worry_free_pregnancy');
Route::get('/travel-in-style', function () {
    return view('travel-in-style');
})->name('travel_in_style');
Route::get('/mechanical-warfare', function () {
    return view('mechanical-warfare');
})->name('mechanical_warfare');
