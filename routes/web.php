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
    return view('home', ['name' => 'World']);
})->name('home');

Route::get('/link1', function () {
    $name = "Pietro";
    $surname = "Scandola";

    return view('link1', compact('name', 'surname'));
})->name('link1');

Route::get('/link2', function () {
    return view('link2');
})->name('link2');

Route::get('/link3', function () {
    return view('link3');
})->name('link3');
