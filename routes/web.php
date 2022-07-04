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
Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', function(){
    return view('pages.home');
});
Route::get('/services', function(){
    return view('pages.services');
});
Route::get('/works', function(){
    return view('pages.works');
});
Route::get('/quotes', function(){
    return view('pages.quotes');
});
Route::get('/blog', function(){
    return view('pages.blog');
});
Route::get('/help', function(){
    return view('pages.help');
});
