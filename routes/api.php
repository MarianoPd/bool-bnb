<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')
    ->group(function(){
        Route::get('/flats', 'FlatController@index');
        Route::get('/flats/search/{lat}/{lon}', 'FlatController@getFlatsBySearch');
        Route::get('/flats/sponsored', 'FlatController@getSponsoredFlats');
        Route::get('/flats/{slug}', 'FlatController@show');

        Route::post('detail', 'MessageContoller@store');

        Route::get('sponsorships', 'SponsorshipController@index');

        Route::get('orders/generate','Orders\OrderController@generate');
        Route::post('orders/make/payment','Orders\OrderController@makePayment');

        
    });

    