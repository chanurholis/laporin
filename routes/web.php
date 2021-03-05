<?php

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

Route::get('/', function () {
    return view('public.index');
});

Route::get('/admin', function () {
    return redirect(route('admin.dashboard'));
});

Route::get('/home', function () {
    return redirect(route('admin.dashboard'));
});

Route::get('/term-of-use', function () {
    return view('public.term-of-use');
});

Auth::routes();

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'HomeController')->name('dashboard');

    Route::resource('users', 'UserController', [
        'index' => 'users'
    ]);
});

Route::name('login.')->prefix('login')->group(function () {
    Route::get('{provider}', 'Auth\AuthController@redirectToProvider')->name('provider');
    Route::get('{provider}/callback', 'Auth\AuthController@handleProviderCallback')->name('provider-callback');
});

Route::name('register.')->prefix('register')->group(function () {
});
