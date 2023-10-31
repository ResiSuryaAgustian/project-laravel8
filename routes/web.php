<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Box;

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

Route::get('', function () {
    return view ('welcome'); //kalo ini diilangin, echo bawah jalan

});

/*
Route::get('/percobaan', [Box::class, 'coba']);
Route::get('/boxi', [Box::class, 'index']);
*/

Route::get('biodataku', [Box::class, 'index']);
