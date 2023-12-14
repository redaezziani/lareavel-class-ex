<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
})->name('home');

Route::get('/contacts', function(){
    return view('pages.contacts');
})->name('contacts');

Route::get('/create', function(){
    return view('create');
})->name('create');

// routes/web.php


Route::post('/add', [ContactController::class, 'store']);

