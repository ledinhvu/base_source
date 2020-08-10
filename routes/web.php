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

Route::get('/404',function(){
    return view('errors.404');
});

Auth::routes(['reset' => false]);

// Route::get('logout', 'Auth\LoginController@logout');
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'admin'],function(){
    Route::get('/', ['as' => 'home.index', 'uses' => 'Backend\HomeController@index']);
});

// Frontend
Route::get('/', 'Frontend\HomeController@index')->name('homeFrontend');
