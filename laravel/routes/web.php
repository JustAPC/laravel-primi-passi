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

    include __DIR__ . '/menuItems.php';

    return view('home', $data);
})->name('home');


Route::get('/aboutus', function () {

    include __DIR__ . '/menuItems.php';

    return view('aboutus', $data);
})->name('aboutus');


Route::get('/documentation', function () {

    include __DIR__ . '/menuItems.php';

    return view('documentation', $data);
})->name('documentation');
