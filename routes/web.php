<?php

use App\Http\Controllers\Web\Reconcillio\Invoice\InvoiceCreateController;
use App\Http\Controllers\Web\Reconcillio\Invoice\InvoiceIndexController;
use App\Http\Controllers\Web\Reconcillio\Invoice\InvoiceShowController;
use App\Http\Controllers\Web\Reconcillio\Invoice\InvoiceStoreController;
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
    return to_route('invoices.index');
});

Route::prefix('/invoices')->name('invoices.')->group(function () {
    Route::get('/', InvoiceIndexController::class)->name('index');
    Route::get('/create', InvoiceCreateController::class)->name('create');
    Route::get('/{invoice}', InvoiceShowController::class)->name('show');
    Route::post('/', InvoiceStoreController::class)->name('store');
});
