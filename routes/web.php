<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Box;
use App\Http\Controllers\FormController;

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

// Route::get('/biodataku', [Box::class, 'index']);
// Route::post('/result', [FormController::class, 'processForm']);
// Route::get('/form', [FormController::class, 'showForm']);

Route::get("/percobaan", [Box::class, 'coba']);
Route::get("/box", [Box::class, 'index']);

Route::get("/form",[formController::class,'index']);
Route::post("/form",[formController::class,'action'])->name('form.action');