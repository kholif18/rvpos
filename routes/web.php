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

Route::get('/list-purchases', function() {
    return view('transactions/list-purchases');
});

Route::get('/debt', function() {
    return view('transactions/debt');
});

Route::get('/list-pos', function() {
    return view('transactions/list-pos');
});

Route::get('/sales', function() {
    return view('sales/sales');
});

Route::get('/items', function() {
    return view('products/items');
});

Route::get('/category-unit', function() {
    return view('products/category-unit');
});

Route::get('/stockout', function() {
    return view('products/stockout');
});
