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

Route::get('/pompinstallaties', function(){
    return view('pages.pompinstallaties');
})->name('pompinstallaties');

Route::get('/boorputten', function(){
    return view('pages.boorputten');
})->name('boorputten');

Route::get('/beregeningen', function(){
    return view('pages.beregeningen');
})->name('beregeningen');

Route::get('/pe-lassen', function(){
    return view('pages.pe-lassen');
})->name('pe-lassen');

Route::get('/water-en-gierslangen', function(){
    return view('pages.water-en-gierslangen');
})->name('water-en-gierslangen');