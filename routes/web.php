<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TechniqueAreaController;
use App\Http\Controllers\ThematicAreaController;
use App\Http\Controllers\InterestedController;
use App\Http\Controllers\AdministrativeRegionController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\DemandController;

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

//route group for activities

Route::controller(ActivityController::class)->group(function(){

    Route::get('activities', 'index')->name('activities.index');

    Route::post('activities', 'store')->name('activities.store');

    Route::get('activities/create', 'create')->name('activities.create');

    Route::get('activities/{item}', 'show')->name('activities.show');

    Route::put('activities/{item}', 'update')->name('activities.update');

    Route::delete('activities/{item}', 'destroy')->name('activities.destroy');

    Route::get('activities/{item}/edit', 'edit')->name('activities.edit');

});

//route group for technique areas

Route::controller(TechniqueAreaController::class)->group(function(){

    Route::get('technique-areas', 'index')->name('techniqueAreas.index');

    Route::post('technique-areas', 'store')->name('techniqueAreas.store');

    Route::get('technique-areas/create', 'create')->name('techniqueAreas.create');

    Route::get('technique-areas/{item}', 'show')->name('techniqueAreas.show');

    Route::put('technique-areas/{item}', 'update')->name('techniqueAreas.update');

    Route::delete('technique-areas/{item}', 'destroy')->name('techniqueAreas.destroy');

    Route::get('technique-areas/{item}/edit', 'edit')->name('techniqueAreas.edit');

});

//route group for thematic areas

Route::controller(ThematicAreaController::class)->group(function(){

    Route::get('thematic-areas', 'index')->name('thematicAreas.index');

    Route::post('thematic-areas', 'store')->name('thematicAreas.store');

    Route::get('thematic-areas/create', 'create')->name('thematicAreas.create');

    Route::get('thematic-areas/{item}', 'show')->name('thematicAreas.show');

    Route::put('thematic-areas/{item}', 'update')->name('thematicAreas.update');

    Route::delete('thematic-areas/{item}', 'destroy')->name('thematicAreas.destroy');

    Route::get('thematic-areas/{item}/edit', 'edit')->name('thematicAreas.edit');

});

//route group for interesteds

Route::controller(InterestedController::class)->group(function(){

    Route::get('interesteds', 'index')->name('interesteds.index');

    Route::post('interesteds', 'store')->name('interesteds.store');

    Route::get('interesteds/create', 'create')->name('interesteds.create');

    Route::get('interesteds/{item}', 'show')->name('interesteds.show');

    Route::put('interesteds/{item}', 'update')->name('interesteds.update');

    Route::delete('interesteds/{item}', 'destroy')->name('interesteds.destroy');

    Route::get('interesteds/{item}/edit', 'edit')->name('interesteds.edit');

});

//route group for administrative regions

Route::controller(AdministrativeRegionController::class)->group(function(){

    Route::get('administrative-regions', 'index')->name('administrativeRegions.index');

    Route::post('administrative-regions', 'store')->name('administrativeRegions.store');

    Route::get('administrative-regions/create', 'create')->name('administrativeRegions.create');

    Route::get('administrative-regions/{item}', 'show')->name('administrativeRegions.show');

    Route::put('administrative-regions/{item}', 'update')->name('administrativeRegions.update');

    Route::delete('administrative-regions/{item}', 'destroy')->name('administrativeRegions.destroy');

    Route::get('administrative-regions/{item}/edit', 'edit')->name('administrativeRegions.edit');

});


//route group for sections

Route::controller(SectionController::class)->group(function(){

    Route::get('sections', 'index')->name('sections.index');

    Route::post('sections', 'store')->name('sections.store');

    Route::get('sections/create', 'create')->name('sections.create');

    Route::get('sections/{item}', 'show')->name('sections.show');

    Route::put('sections/{item}', 'update')->name('sections.update');

    Route::delete('sections/{item}', 'destroy')->name('sections.destroy');

    Route::get('sections/{item}/edit', 'edit')->name('sections.edit');

});

//route group for processes

Route::controller(ProcessController::class)->group(function(){

    Route::get('processes', 'index')->name('processes.index');

    Route::post('processes', 'store')->name('processes.store');

    Route::get('processes/create', 'create')->name('processes.create');

    Route::get('processes/{item}', 'show')->name('processes.show');

    Route::put('processes/{item}', 'update')->name('processes.update');

    Route::delete('processes/{item}', 'destroy')->name('processes.destroy');

    Route::get('processes/{item}/edit', 'edit')->name('processes.edit');

});

Route::controller(DemandController::class)->group(function(){

    Route::get('demands', 'demandsWithRelationships')->name('demands.relations');

    Route::post('demands', 'store')->name('demands.store');

    Route::get('demands/create', 'create')->name('demands.create');

    Route::get('demands/{item}', 'show')->name('demands.show');

    Route::put('demands/{item}', 'update')->name('demands.update');

    Route::delete('demands/{item}', 'destroy')->name('demands.destroy');

    Route::get('demands/{item}/edit', 'edit')->name('demands.edit');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
