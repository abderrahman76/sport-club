<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/rewards',[\App\Http\Controllers\PrixController::class, 'index']);
Route::get('/events',[\App\Http\Controllers\EvenementController::class, 'index']);
Route::get('/sports', [\App\Http\Controllers\SportController::class, 'index'])->name('sports');
Route::get('/sport/{sport}', [\App\Http\Controllers\SportController::class, 'show'])->name('sport');
Route::get('/centres',[\App\Http\Controllers\CentreController::class, 'index'])->name('centres');

Route::group(['middleware' => 'auth'], function () {
    

    Route::get('/myrewards',[\App\Http\Controllers\PrixController::class, 'show']);
    Route::middleware(['is_admin'])->get('/allrewards',[\App\Http\Controllers\PrixController::class, 'showadmin']);
    Route::middleware(['is_admin'])->get('/allrewards/{prix}',[\App\Http\Controllers\PrixController::class, 'claim'])->name('claim');
    // Route::middleware(['is_admin'])->post('/allrewards',[\App\Http\Controllers\PrixController::class, 'search'])->name('search');


    Route::get('/collect/{prix}',[\App\Http\Controllers\PrixController::class, 'create'])->name('collect');
    Route::get('/participate/{event}',[\App\Http\Controllers\EvenementController::class, 'create'])->name('participate');
    Route::get('/mybadges',[\App\Http\Controllers\EvenementController::class, 'show'])->name('mybadges');
    Route::get('/myadhesion',[\App\Http\Controllers\AdhesionController::class, 'index'])->name('myadhesion');
    // Route::get('/session/{adhesion}',[\App\Http\Controllers\AdhesionController::class, 'session'])->name('session');
    // Route::get('/success/{id}',[\App\Http\Controllers\AdhesionController::class, 'success'])->name('success');
    // Route::get('/success2/{id}',[\App\Http\Controllers\AdhesionController::class, 'success2'])->name('success2');
    
    // Route::get('/session2/{adhesion}',[\App\Http\Controllers\AdhesionController::class, 'upgrade'])->name('session2');
    Route::get('/cancel/{sport}',[\App\Http\Controllers\AdhesionController::class, 'cancel'])->name('cancel');
    

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
