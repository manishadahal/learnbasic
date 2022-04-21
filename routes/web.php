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
    return view('home');
});

Route::get('/about/{name}/{id?}', function ($name, $id = null) {
    return view('about', compact('name', 'id'));
});

Route::get('/demo', function () {
    return view('demo');
});
Route::get('/course/{name}', function ($name) {
    return view('course', compact('name'));
});