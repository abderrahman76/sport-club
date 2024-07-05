<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rewards',[\App\Http\Controllers\PrixController::class, 'index']);
Route::get('/events',[\App\Http\Controllers\EvenementController::class, 'index']);


// Route::get('/subs', function () {
//     return view('subscribe');
// })->name('subscribe');

Route::get('/sports', [\App\Http\Controllers\SportController::class, 'index'])->name('sports');
Route::get('/sport/{sport}', [\App\Http\Controllers\SportController::class, 'show'])->name('sport');
Route::get('/centres',[\App\Http\Controllers\CentreController::class, 'index'])->name('centres');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/checkout',[\App\Http\Controllers\AdhesionController::class, 'checkout'])->name('checkout');



Route::group(['middleware' => 'auth'], function () {
    

    Route::get('/myrewards',[\App\Http\Controllers\PrixController::class, 'show']);
    Route::middleware(['is_admin'])->get('/allrewards',[\App\Http\Controllers\PrixController::class, 'showadmin']);
    Route::middleware(['is_admin'])->get('/allrewards/{prix}',[\App\Http\Controllers\PrixController::class, 'claim'])->name('claim');
    Route::middleware(['is_admin'])->post('/allrewards',[\App\Http\Controllers\PrixController::class, 'search'])->name('search');


    Route::get('/collect/{prix}',[\App\Http\Controllers\PrixController::class, 'create'])->name('collect');
    Route::get('/participate/{event}',[\App\Http\Controllers\EvenementController::class, 'create'])->name('participate');
    Route::get('/mybadges',[\App\Http\Controllers\EvenementController::class, 'show'])->name('mybadges');
    Route::get('/myadhesion',[\App\Http\Controllers\AdhesionController::class, 'index'])->name('myadhesion');
    Route::get('/session/{adhesion}',[\App\Http\Controllers\AdhesionController::class, 'session'])->name('session');
    Route::get('/success/{id}',[\App\Http\Controllers\AdhesionController::class, 'success'])->name('success');
    Route::get('/success2/{id}',[\App\Http\Controllers\AdhesionController::class, 'success2'])->name('success2');
    
    Route::get('/session2/{adhesion}',[\App\Http\Controllers\AdhesionController::class, 'upgrade'])->name('session2');
    Route::get('/cancel/{sport}',[\App\Http\Controllers\AdhesionController::class, 'cancel'])->name('cancel');
    

});

