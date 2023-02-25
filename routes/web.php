<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Product\Category\StoreController;
use App\Http\Controllers\Sale\SaleController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('login', function () {
    return view('auth/login');
});

Route::get('/user', function () {
    return view('user/user');
});

Route::get('/supplier', function () {
    return view('supplier/suppliers');
});

Route::get('/customers', function () {
    return view('customers/customers');
});

Route::get('/list-purchases', function () {
    return view('transactions/list-purchases');
});

Route::get('/debt', function () {
    return view('transactions/debt');
});

Route::get('/transactions/list-pos', function () {
    return view('transactions/list-pos');
});

Route::get('/purchases', function () {
    return view('transactions/purchases');
});

Route::get('/sales', [SaleController::class, 'index']);

Route::get('/products', function () {
    return view('products/products');
});

Route::get('/category-unit', function () {
    return view('products/category-unit');
});

Route::post('/products/category', [StoreController::class, 'index']);

Route::get('/stockout', function () {
    return view('products/stockout');
});

// Route::get('/stockin', function() {
//     return view('products/stockin');
// });

Route::get('/stock-opname', function () {
    return view('products/stock-opname');
});

Route::get('/setting', function () {
    return view('setting/setting');
});

Route::get('/sales-report', function () {
    return view('report/sales-report');
});

Route::get('/stockin-out', function () {
    return view('report/stockin-out');
});

Route::get('/profit-loss', function () {
    return view('report/report-profit-loss');
});

Route::get('/debt-report', function () {
    return view('report/debt-report');
});
