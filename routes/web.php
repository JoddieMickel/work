<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GirlController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('welcome');
 });
 Auth::routes();
 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/create','GirlController@create');
 Route::get('/girls', 'GirlController@index');
 Route::get('/edit/girls/{id}','GirlController@edit');
 Route::post('/edit/girls/{id}','GirlController@update');
 Route::delete('/delete/girls/{id}','GirlController@destroy');