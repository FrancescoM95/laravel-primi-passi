<?php

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
    $user = ['name' => 'Francesco', 'surname' => 'Mongiello', 'age' => '28', 'job' => 'Web Developer'];
    return view('home', $user);
})->name('home');


Route::get('/job', function () {
    return view('job');
})->name('job');

Route::get('/info', function () {
    return view('info');
})->name('info');
