<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\redirectController;

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
/* welcome route */
Route::get('/', [ownerController::class, 'index']);

Route::get('/view_property', [ownerController::class, 'view_property']);

/* redirect of user */
Route::get('redirects', [redirectController::class, 'redirect']);


Route::post('/add_property',[ownerController::class, 'owner'] );
/* to delete from table */
Route::get('delete/{id}', [ownerController::class, 'delete']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
    return view('welcome');
})->name('welcome'); */

Route::middleware(['auth:sanctum', 'verified'])->get('/add_property', function () {
    return view('add_property');
})->name('add_property');

Route::middleware(['auth:sanctum', 'verified'])->get('/view_property', function () {
    return view('view_property');
})->name('view_property');

Route::middleware(['auth:sanctum', 'verified'])->get('/update_property', function () {
    return view('update_property');
})->name('update_property');

