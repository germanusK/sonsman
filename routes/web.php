<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\dashboard\customers;
use App\Http\Controllers\dashboard\main;
use App\Http\Controllers\dashboard\messages;
use App\Http\Controllers\dashboard\property as DashboardProperty;
use App\Http\Controllers\dashboard\schedules;
use App\Http\Controllers\dashboard\siteInfo;
use App\Http\Controllers\Market;
use App\Http\Controllers\MarketDetails;
use App\Http\Controllers\Messenger;
use App\Http\Controllers\Others;
use App\Http\Controllers\Property;
use App\Http\Controllers\PropertyDetails;
use App\Http\Controllers\VisitBooker;
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

Route::get('/', [Controller::class, '_index']);
Route::get('/property', [Property::class, 'index']);
Route::get('/market', [Market::class, 'index']);
Route::get('/propertyDetails/{id}', [PropertyDetails::class, 'index']);
Route::get('/marketDetails/{id}', [MarketDetails::class, 'index']);
Route::get('/bookVisit/{id}', [VisitBooker::class, 'index']);
Route::post('/bookVisit/{id}', [VisitBooker::class, 'submit']);
Route::get('/about', [Others::class, 'about']);

Route::post('/submitSchedule', [VisitBooker::class, 'submit']);
Route::post('/submitMessage', [Messenger::class, 'submit']);//handle submision of orders, problem reports and messages
Route::post('/subscribe', [Others::class, 'subscribe']);


Route::group(['prefix'=>'/rest', 'middleware'=>'auth'], function(){
    Route::get('/', [main::class, 'index'])->name('rest');
    Route::group(['prefix'=>'/property'], function(){
        Route::get('/', [DashboardProperty::class, 'index']);
        Route::get('/create', [DashboardProperty::class, 'create']);
        Route::post('/create', [DashboardProperty::class, 'store']);
        Route::get('/edit/{id}', [DashboardProperty::class, 'edit']);
        Route::post('/edit/{id}', [DashboardProperty::class, 'update']);
        Route::get('/preview/{id}', [DashboardProperty::class, 'preview']);
        Route::post('/delete/{id}', [DashboardProperty::class, 'delete']);
    });
    Route::group(['prefix'=>'schedules'], function(){
        Route::get('/', [schedules::class, 'index']);
        Route::get('/preview/{id}', [schedules::class, 'preview']);
        Route::get('/edit/{id}', [schedules::class, 'edit']);
        Route::post('/edit/{id}', [schedules::class, 'update']);
        Route::post('/delete/{id}', [schedules::class, 'delete']);
    });
    Route::group(['prefix'=>'./customers'], function(){
        Route::get('/', [customers::class, 'index']);
        Route::get('/preview/{id}', [customers::class, 'preview']);
        Route::get('/edit/{id}', [customers::class, 'edit']);
        Route::post('/edit/{id}', [customers::class, 'update']);
        Route::post('/delete/{id}', [customers::class, 'delete']);
    });
    Route::group(['prefix'=>'/info'], function(){
        Route::get('/', [siteInfo::class, 'index']);
        Route::get('/preview/{id}', [siteInfo::class, 'preview']);
        Route::get('/edit/{id}', [siteInfo::class, 'edit']);
        Route::post('/edit/{id}', [siteInfo::class, 'update']);
    });
    Route::group(['prefix'=>'/messages'], function(){
        Route::get('/', [messages::class, 'index']);
        Route::get('/preview/{id}', [messages::class, 'preview']);
        Route::get('/reply/{id}', [messages::class, 'reply']);
        Route::post('/reply/{id}', [messages::class, 'respond']);
        Route::post('/delete/{id}', [messages::class, 'delete']);
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
