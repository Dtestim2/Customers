<?php

use App\Http\Controllers\CustomersController;
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

Route::get('/cliente', [CustomersController::class,'create'])->name('new_customer');

Route::post('/cliente', [CustomersController::class,'store'])->name('register');

Route::get('/cliente/{id}', [CustomersController::class,'edit'])->name('show_edit');

Route::put('/cliente/{id}', [CustomersController::class,'update'])->name('edit_customer');

Route::delete('/cliente/{id}', [CustomersController::class,'delete'])->name('delete_customer');

Route::get('/', [CustomersController::class,'listCustomers'])->name('list_customer');

Route::get('/consulta/final-placa', [CustomersController::class,'searchCustomers'])->name('list_search_customers');
