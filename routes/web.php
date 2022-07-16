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
Route::get('/', function(){return view('welcome');});
Route::get('/home', function(){return view('pages.home');});
Route::get('/services', function(){return view('pages.services');});
Route::get('/works', function(){return view('pages.works');});
Route::get('/quotes', function(){return view('pages.quotes');});
Route::get('/blog', function(){return view('pages.blog');});
Route::get('/help', function(){return view('pages.help');});
Route::get('/login', function(){return view('auth.login');});
Route::get('/register', function(){return view('auth.register');});
Route::get('/forgot-password', function(){return view('auth.forgot-password');});

// Dashboard routes
Route::group(['prefix'=>'/dashboard'], function(){
    Route::get('/', function(){return view('dashboard.home');})->name('dashboard');
    Route::get('profile', function(){return view('dashboard.profile');})->name('profile');
    Route::get('/notifications', function(){return view('dashboard.notifications');})->name('notifications');
    Route::group(['prefix'=>'/store'], function(){
        Route::get('/', function(){return view('dashboard.store.home');})->name('stores');
        Route::get('/new_store', function(){return view('dashboard.store.new-store');})->name('new_store');
        Route::get('/new_item', function(){return view('dashboard.store.new-item');})->name('new_item');
        Route::get('/edit_store', function(){return view('dashboard.store.edit-store');})->name('edit_store');
        Route::get('/edit_item', function(){return view('dashboard.store.edit-item');})->name('edit_item');
        Route::get('/item', function(){return view('dashboard.store.store-item');});
        Route::get('/profile', function(){return view('dashboard.store.info');});
    });
});
