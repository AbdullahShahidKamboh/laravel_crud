<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', [CustomerController::class,'showcustomers'])->name('home');
Route::get('/view/{id}', [CustomerController::class,'singlecustomer'])->name('view.customer');
Route::get('/viewcustomer/{id}', [CustomerController::class,'singlepasscustomer'])->name('viewpass.customer');
Route::post('/addCustomer', [CustomerController::class,'addcustomer'])->name('add.customer');
Route::get('/deleteCustomer/{id}', [CustomerController::class,'deletecustomer'])->name('delete.customer');
Route::put('/updatecustomer', [CustomerController::class,'updatecustomer'])->name('update.customer');
Route::view('addnew','/addCustomer');