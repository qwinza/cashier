<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\InvoiceController;

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

Route::redirect('/', '/login');

Route::get('/login', [LoginController::class, 'index'])
    ->middleware(['guest'])
    ->name('login.index');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware(['guest'])
    ->name('login.store');

Route::get('/cashier', [CashierController::class, 'index'])
    ->middleware(['auth'])
    ->name('cashier.index');

Route::get('/invoices/{invoice}', [InvoiceController::class, 'show'])
    ->middleware(['auth'])
    ->name('invoice.show');
