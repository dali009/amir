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
    return view('welcome');
});

Route::get('/picking', function () {
    return view('picking.import');
});


// Route::get('/printpicking', function () {
//     return view('printpicking');
// });

// Route::post('/import', [App\Http\Controllers\InputController::class, 'import'])->name('import');
Route::get('/picking/printpicking', [App\Http\Controllers\ImportController::class, 'printpicking'])->name('printpicking');
Route::get('/picking', [App\Http\Controllers\ImportController::class, 'index'])->name('picking');
Route::post('/picking/import', [App\Http\Controllers\ImportController::class, 'import'])->name('import');
Route::get('/kitting',[App\Http\Controllers\KittingController::class, 'kitting'])->name('kitting');
Route::get('/missing',[App\Http\Controllers\KittingController::class, 'missing'])->name('missing');
Route::post('/kitting/printKitting',[App\Http\Controllers\KittingController::class, 'search'])->name('printKitting');
Route::delete('picking/import/delete/{record}', [App\Http\Controllers\ImportController::class, 'destroy'])->name('delete');
Route::get('picking/import/show/{record}', [App\Http\Controllers\ImportController::class, 'show'])->name('show');


