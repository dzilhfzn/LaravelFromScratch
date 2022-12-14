<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Auth;

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

// Route::get('products', function () {
//     return 'test';
// });

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{id}', [ProductsController::class, 'display'])->where('id', '[0-9]+');

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/users', [Users::class, 'index']);

Auth::routes();

Route::get('/get/student/list', [StudentsController::class, 'getStudentList']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
