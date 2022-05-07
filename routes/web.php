<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

// Route::get('/{lang?}', function ($lang = null) {
//     App::setLocale($lang);
//     return view('welcome');
// });
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

//Route group.....................
Route::group(['prefix' => '/customer'], function () {
    Route::get('create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::get('trash', [CustomerController::class, 'viewTrash'])->name('customer.trash');
    Route::get('forcedelete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.forcedelete');
    Route::get('restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
    Route::get('/', [CustomerController::class, 'view']);
    Route::post('/', [CustomerController::class, 'store']);
});
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
Route::get('/upload', [UploadController::class, 'uploadpage'])->name('upload-page');
Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
//relationship
// Route::get('/data', [IndexController::class, 'index']);
// Route::get('/group/{group}', [IndexController::class, 'group']);
Route::get('/data', [IndexController::class, 'index'])->middleware('guard');
Route::get('/group', [IndexController::class, 'group'])->middleware('guard');
Route::get('/no-access', function () {
    echo "You are not access to the page";
    die;
});
Route::get('/login', function () {
    session()->put('user_id', 1);
    return redirect('/');
});
Route::get('/logout', function () {
    session()->forgot('user_id');
    return redirect('/');
});
