<?php

use App\Http\Controllers\Customers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Kas\KasController;
use App\Http\Controllers\Kas\KasIn\KasInController;
use App\Http\Controllers\Kas\KasOut\KasOutController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Products\Category\CategoryController;
use App\Http\Controllers\Products\Category\StoreController as CategoryStoreController;
use App\Http\Controllers\Products\Products\ProductsController;
use App\Http\Controllers\Products\StockOpname\StockOpnameController;
use App\Http\Controllers\Products\StockOut\StockOutController;
use App\Http\Controllers\Purchases\ListPurchases\ListPurchasesController;
use App\Http\Controllers\Purchases\Purchase\PurchaseController;
use App\Http\Controllers\Report\DebtReport\DebtReportController;
use App\Http\Controllers\Report\ProfitLoss\ProfitLossController;
use App\Http\Controllers\Report\SalesReport\SalesReportController;
use App\Http\Controllers\Report\StockInOut\StockInOutController;
use App\Http\Controllers\Sales\SalesController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Supplier\SuppliersController;
use App\Http\Controllers\Transaction\Debt\DebtController;
use App\Http\Controllers\Transaction\Debt\DebtPayController;
use App\Http\Controllers\Transaction\ListPost\ListPostController;
use App\Http\Controllers\User\UserController;
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

// Transaction -----------------------------------------------------------------------

Route::get('/transactions/list-pos', [ListPostController::class, 'index']);

Route::get('/transactions/debt', [DebtController::class, 'index']);

Route::get('/transactions/debtpay', [DebtPayController::class, 'index']);

//Purchases -----------------------------------------------------------------------

Route::get('/purchases/purchase', [PurchaseController::class, 'index']);

Route::get('/purchases/list-purchases', [ListPurchasesController::class, 'index']);

//Products -----------------------------------------------------------------------

Route::get('/products/products', [ProductsController::class, 'index']);

Route::get('/products/category-unit', [CategoryController::class, 'index']);

Route::post('/products/category', [CategoryStoreController::class, 'index']);

Route::get('/products/stockout', [StockOutController::class, 'index']);

Route::get('/products/stock-opname', [StockOpnameController::class, 'index']);

//Kas ----------------------------------------------------------------------------

Route::get('/kas', [KasController::class, 'index']);

//Supplier -----------------------------------------------------------------------

Route::get('/supplier', [SuppliersController::class, 'index']);

//Customer -----------------------------------------------------------------------

Route::get('/customers', [CustomersController::class, 'index']);

//Reposrt -----------------------------------------------------------------------

Route::get('/report/sales-report', [SalesReportController::class, 'index']);

Route::get('/report/stockin-out', [StockInOutController::class, 'index']);

Route::get('/report/profit-loss', [ProfitLossController::class, 'index']);

Route::get('/report/debt-report', [DebtReportController::class, 'index']);

//User -----------------------------------------------------------------------

Route::get('/user', [UserController::class, 'index']);



// Route::get('/stockin', function() {
//     return view('products/stockin');    
// });

//Setting -----------------------------------------------------------------------

Route::get('/setting', [SettingController::class, 'index']);
