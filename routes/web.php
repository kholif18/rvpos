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

Route::get('login', function() {
    return view('auth/login');
});

Route::get('/user', function() {
    return view('user/user');
});

Route::get('/supplier', function() {
    return view('supplier/suppliers');
});

Route::get('/customers', function() {
    return view('customers/customers');
});

Route::get('/debt', function() {
    return view('transactions/debt');
});

Route::get('/sales', function() {
    return view('sales/sales');
});