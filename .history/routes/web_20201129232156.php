<?php 

use App\Http\Controllers\FormController;
use App\Mail\WelcomeMail;
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

Route::get('/form', 'App\Http\Controllers\FormController@contact');
Route::post('/form', 'App\Http\Controllers\FormController@formSubmit')->name('form.submit');
Route::get('users/export/', 'FormController@export');



// Route::get('/', function () {
//     return view('form');
// });
// Route::post("form", [FormController::class, 'getData']);
// Route::view("login", "form");

// Route::get('/email', function () {
//     Mail::to('samora.sm.sam@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });




     