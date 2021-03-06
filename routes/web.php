<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('guest.welcome');
});

Auth::routes();

Route::middleware('auth')
        ->namespace('Host')
        ->name('host.')
        ->prefix('host')
        ->group(function(){
            Route::get('/','HomeController@index')->name('index');
            Route::get('/plans/{slug}', 'PlansController@index')->name('plans');
            Route::get('/plans/payment/{slug}/{plan}', 'PlansController@goToPayment')->name('payment');
            Route::post('plans/payment/pay', 'PlansController@pay')->name('pay');
            Route::resource('/flats','FlatController');
            
        });



Route::get("{any?}", function(){
    return view('guest.welcome');
})->where('any', '.*');

