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

Route::get('/signup', function () {
    return view('signup-form');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/doctor-signup', function () {
    return view('doctor-signup');
});

use Illuminate\Support\Facades\DB;

Route::get('/test-db-connection', function () {
    $results = DB::select('select * from users');
    return view('test-db-connection', ['results' => $results]);
});
