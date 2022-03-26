<?php

use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/property', [Property::class, 'index']);
Route::get('/market', [Market::class, 'index']);
Route::get('/propertyDetails/{id}', [PropertyDetails::class, 'index']);
Route::get('/marketDetails/{id}', [MarketDetails::class, 'index']);
Route::get('/bookVisit/{group}/{id}', [VisitBooker::class, 'index']);
Route::get('/about', [Others::class, 'about']);

Route::post('/submitSchedule', [VisitBooker::class, 'submit']);
Route::post('/submitMessage', [Messenger::class, 'submit']);//handle submision of orders, problem reports and messages
Route::post('/subscribe', [Others::class, 'subscribe']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
