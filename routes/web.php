<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteUri;
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

Auth::routes();

Route::get('/', 'GuestController@home')->name('home'); //Questo è il "nome" della rotta

Route::get('/contacts', 'GuestController@contacts')->name('contacts');

Route::post('/contacts/submit', 'GuestController@submit')->name('contacts.submit');

Route::get('/thankyou', 'GuestController@thankyou')->name('thankyou');
