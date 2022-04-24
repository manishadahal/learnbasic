<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
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

Route::get('/home', function () {
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
//form
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/register', [RegisterController::class, 'index']);
//component
Route::post('/input', [ComponentController::class, 'input']);
Route::get('/input', [ComponentController::class, 'index']);
//customer

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer', [CustomerController::class, 'view']);
Route::post('/customer', [CustomerController::class, 'store']);
//session
Route::get('get-all-session', function () {
    $session = session()->all();
    printArray($session);
});
Route::get('set-session', function (Request $request) {
    $request->session()->put('name', "mansha");
    $request->session()->put('id', "9845");
    $request->session()->flash('message', 'successfull');
    return redirect('/get-all-session');
});
Route::get('destroy-session', function () {
    session()->forget('name');
    session()->forget('id');
    return redirect('/get-all-session');
});
