<?php 


use App\Mail\WelcomeMail;

use App\Http\Controllers\FormController;
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
if (App::environment('production')) {
    URL::forceScheme('https');
}
Route::get('/', 'App\Http\Controllers\FormController@contact');
Route::post('/', 'App\Http\Controllers\FormController@emailfail');
Route::post('/', 'App\Http\Controllers\FormController@formSubmit')->name('form.submit');
Route::get('users/export/', 'FormController@formSubmit');
Route::view('/', 'form');






     