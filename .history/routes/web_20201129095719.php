<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Mail\WelcomeMail;
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
Route::post("welcome", [FormController::class, 'getData']);
Route::view("login", "welcome");

Route::get('/email', function () {
    return new WelcomeMail();
});
