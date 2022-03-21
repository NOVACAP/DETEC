<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TechniqueAreaController;
use App\Http\Controllers\ThematicAreaController;
use App\Http\Controllers\InterestedController;
use App\Http\Controllers\AdministrativeRegionController;
use App\Http\Controllers\SectionController;

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

//rotas de area atividades

Route::controller(ActivityController::class)->group(function(){

    Route::get('activities', 'index')->name('activities.index');

    Route::post('activities', 'store')->name('activities.store');

    Route::get('activities/create', 'create')->name('activities.create');

    Route::get('activities/{item}', 'show')->name('activities.show');

    Route::put('activities/{item}', 'update')->name('activities.update');

    Route::delete('activities/{item}', 'destroy')->name('activities.destroy');

    Route::get('activities/{item}/edit', 'edit')->name('activities.edit');

});

//rotas de area tecnica

Route::controller(TechniqueAreaController::class)->group(function(){

    Route::get('technique-areas', 'index')->name('techniqueAreas.index');

    Route::post('technique-areas', 'store')->name('techniqueAreas.store');

    Route::get('technique-areas/create', 'create')->name('techniqueAreas.create');

    Route::get('technique-areas/{item}', 'show')->name('techniqueAreas.show');

    Route::put('technique-areas/{item}', 'update')->name('techniqueAreas.update');

    Route::delete('technique-areas/{item}', 'destroy')->name('techniqueAreas.destroy');

    Route::get('technique-areas/{item}/edit', 'edit')->name('techniqueAreas.edit');

});

//rotas de area temática

Route::controller(ThematicAreaController::class)->group(function(){

    Route::get('thematic-areas', 'index')->name('thematicAreas.index');

    Route::post('thematic-areas', 'store')->name('thematicAreas.store');

    Route::get('thematic-areas/create', 'create')->name('thematicAreas.create');

    Route::get('thematic-areas/{item}', 'show')->name('thematicAreas.show');

    Route::put('thematic-areas/{item}', 'update')->name('thematicAreas.update');

    Route::delete('thematic-areas/{item}', 'destroy')->name('thematicAreas.destroy');

    Route::get('thematic-areas/{item}/edit', 'edit')->name('thematicAreas.edit');

});

Route::controller(InterestedController::class)->group(function(){

    Route::get('interesteds', 'index')->name('interesteds.index');

    Route::post('interesteds', 'store')->name('interesteds.store');

    Route::get('interesteds/create', 'create')->name('interesteds.create');

    Route::get('interesteds/{item}', 'show')->name('interesteds.show');

    Route::put('interesteds/{item}', 'update')->name('interesteds.update');

    Route::delete('interesteds/{item}', 'destroy')->name('interesteds.destroy');

    Route::get('interesteds/{item}/edit', 'edit')->name('interesteds.edit');

});

Route::controller(AdministrativeRegionController::class)->group(function(){

    Route::get('administrative-regions', 'index')->name('administrativeRegions.index');

    Route::post('administrative-regions', 'store')->name('administrativeRegions.store');

    Route::get('administrative-regions/create', 'create')->name('administrativeRegions.create');

    Route::get('administrative-regions/{item}', 'show')->name('administrativeRegions.show');

    Route::put('administrative-regions/{item}', 'update')->name('administrativeRegions.update');

    Route::delete('administrative-regions/{item}', 'destroy')->name('administrativeRegions.destroy');

    Route::get('administrative-regions/{item}/edit', 'edit')->name('administrativeRegions.edit');

});

Route::controller(SectionController::class)->group(function(){

    Route::get('sections', 'index')->name('sections.index');

    Route::post('sections', 'store')->name('sections.store');

    Route::get('sections/create', 'create')->name('sections.create');

    Route::get('sections/{item}', 'show')->name('sections.show');

    Route::put('sections/{item}', 'update')->name('sections.update');

    Route::delete('sections/{item}', 'destroy')->name('sections.destroy');

    Route::get('sections/{item}/edit', 'edit')->name('sections.edit');

});










