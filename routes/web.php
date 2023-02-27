<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Product\Category\StoreController;
use App\Http\Controllers\Sales\SalesController;
use App\Http\Controllers\Transaction\Debt\DebtController;
use App\Http\Controllers\Transaction\ListPost\ListPostController;
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

Route::get('login', [LoginController::class, 'index']);

Route::get('/', [DashboardController::class, 'index']);

Route::get('/sales', [SalesController::class, 'index']);

Route::get('/transactions/list-pos', [ListPostController::class, 'index']);

Route::get('/transactions/debt', [DebtController::class, 'index']);

Route::get('/purchases/purchase', function () {
    return view('purchases/purchase');
});

Route::get('/purchases/list-purchases', function () {
    return view('purchases/list-purchases');
});

Route::get('/products/products', function () {
    return view('products/products');
});

Route::get('/products/category-unit', function () {
    return view('products/category-unit');
});

Route::get('/products/stockout', function () {
    return view('products/stockout');
});

Route::get('/products/stock-opname', function () {
    return view('products/stock-opname');
});

Route::get('/supplier', function () {
    return view('supplier/suppliers');
});

Route::get('/customers', function () {
    return view('customers/customers');
});

Route::get('/report/sales-report', function () {
    return view('report/sales-report');
});

Route::get('/report/stockin-out', function () {
    return view('report/stockin-out');
});

Route::get('/report/profit-loss', function () {
    return view('report/report-profit-loss');
});

Route::get('/report/debt-report', function () {
    return view('report/debt-report');
});

Route::get('/user', function () {
    return view('user/user');
});

// Route::post('/products/category', [StoreController::class, 'index']);

// Route::get('/stockin', function() {
//     return view('products/stockin');    
// });

Route::get('/setting', function () {
    return view('setting/setting');
});
