<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;


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
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::controller(ActivityController::class)->group(function(){

    Route::get('activities', 'index')->name('activities.index');

    Route::post('activities', 'store')->name('activities.store');

    Route::get('activities/create', 'create')->name('activities.create');

    Route::get('activities/{item}', 'show')->name('activities.show');

    Route::put('activities/{item}', 'update')->name('activities.update');

    Route::delete('activities/{item}', 'destroy')->name('activities.destroy');

    Route::get('activities/{item}/edit', 'edit')->name('activities.edit');

});



