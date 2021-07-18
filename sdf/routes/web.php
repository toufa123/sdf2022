<?php

declare(strict_types=1);

use App\Http\Controllers\CountryController;
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
    return view('base');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('form', [CountryController::class, 'index']);

Route::middleware(['web', 'admin_auth', 'language'])
    ->prefix(config('speed-admin.admin_url'))
    ->name('admin.')
    ->group(function () {

        // Brand Routes
        Route::resource('country', CountryController::class);
        Route::get('country-data', [CountryController::class, 'getData']);

    });
