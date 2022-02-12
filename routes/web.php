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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/infos', function () {
    return view('layouts.info');
});

Route::get('/contact', function () {
    return view('layouts.contacts.contact');
});

Route::get('/partner', function () {
    return view('layouts.contacts.partner');
});

Route::get('/sav', function () {
    return view('layouts.contacts.sav');
});

Route::get('/back', function () {
    return view('layouts.teams.back');
});

Route::get('/front', function () {
    return view('layouts.teams.front');
});


