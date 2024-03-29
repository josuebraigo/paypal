<?php

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

Route::get('/', ['as' => '/', 'uses' => 'BaseController@index']);
Route::post('/paypal', 'PaymentController@payWithpaypal');
Route::get('/status', ['as' => 'status', 'uses' => 'PaymentController@getPaymentStatus']);
Route::get('/success', ['as' => 'success', 'uses' => 'PaymentController@success']);
Route::get('/cancel', ['as' => 'cancel', 'uses' => 'PaymentController@cancel']);