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
    $teamBack = [
        ['Itadori','Yuji', 'exorcicste', 'itadori.jpg',   '0494 50 11 33', 'Classe 2'],
        ['Fushiguro','Megumi', 'exorcicste', 'megumi.jpeg',   '0497 66 45 33', 'Classe 2'],
        ['Kugisaki','Nobara', 'exorciste', 'nobara.png', '0496 53 11 33', 'Classe 2'],
        ['Zenin','Maki', 'exorcicste', 'maki.png',    '0499 92 11 54', 'Classe 1'],
        ['Inumaki','Toge', 'exorcicste', 'toge.png',    '0485 50 74 79', 'Classe 1'],
        ['Okkotsu','Yuta',  'exorcicste', 'yuta.png',  '0473 47 11 24', 'Classe 1'],
    ];

    return view('layouts.teams.back', compact('teamBack'));
});

Route::get('/front', function () {
    $teamFront = [
        ['Itadori','Yuji', 'exorcicste', 'itadori.jpg',   '0494 50 11 33', 'Classe 2'],
        ['Fushiguro','Megumi', 'exorcicste', 'megumi.jpeg',   '0497 66 45 33', 'Classe 2'],
        ['Kugisaki','Nobara', 'exorciste', 'nobara.png', '0496 53 11 33', 'Classe 2'],
        ['Zenin','Maki', 'exorcicste', 'maki.png',    '0499 92 11 54', 'Classe 1'],
        ['Inumaki','Toge', 'exorcicste', 'toge.png',    '0485 50 74 79', 'Classe 1'],
        ['Okkotsu','Yuta',  'exorcicste', 'yuta.png',  '0473 47 11 24', 'Classe 1'],
    ];
    return view('layouts.teams.front', compact('teamFront'));
});


