<?php

use App\Http\Controllers\ClintController;
use Illuminate\Support\Facades\Route;

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
Route::get('contact', function () {
    return view('travela.contact');
});

Route::get('services', function () {
    return view('travela.services');
});


Route::get('index',[ClintController::class,'index'])->name('index');

Route::get('about',[ClintController::class,'create'])->name('about');

Route::post('store',[ClintController::class,'store'])->name('store');


