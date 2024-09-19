<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('admin/{age}', [AdminController::class,'index']);

// Route::get('admin/show/{age}', [AdminController::class,'show']);


Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth','CheckRole');

Route::middleware('auth')->group(function(){
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
});
