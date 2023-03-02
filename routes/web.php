<?php

use App\Http\Controllers\Customers\AddCustomersController;
use App\Http\Controllers\Customers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Kas\AddKasController;
use App\Http\Controllers\Kas\KasController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Products\Category\CategoryController;
use App\Http\Controllers\Products\Category\DeleteController;
use App\Http\Controllers\Products\Category\StoreController as CategoryStoreController;
use App\Http\Controllers\Products\Products\CreateProductController;
use App\Http\Controllers\Products\Products\ProductsController;
use App\Http\Controllers\Products\StockOpname\CreateStockOpnameController;
use App\Http\Controllers\Products\StockOpname\StockOpnameController;
use App\Http\Controllers\Products\StockOut\AddStockOutController;
use App\Http\Controllers\Products\StockOut\StockOutController;
use App\Http\Controllers\Purchases\ListPurchases\ListPurchasesController;
use App\Http\Controllers\Purchases\Purchase\PurchaseController;
use App\Http\Controllers\Report\DebtReport\DebtReportController;
use App\Http\Controllers\Report\ProfitLoss\ProfitLossController;
use App\Http\Controllers\Report\SalesReport\SalesReportController;
use App\Http\Controllers\Report\StockInOut\StockInOutController;
use App\Http\Controllers\Sales\SalesController;
use App\Http\Controllers\Setting\AddSettingController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Supplier\AddSupplierController;
use App\Http\Controllers\Supplier\SuppliersController;
use App\Http\Controllers\Transaction\Debt\DebtController;
use App\Http\Controllers\Transaction\Debt\DebtPayController;
use App\Http\Controllers\Transaction\ListPost\ListPostController;
use App\Http\Controllers\User\AddUserController;
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
Route::post('/products/add-product', [CreateProductController::class, 'addproduct']);

Route::get('/products/category-unit', [CategoryController::class, 'index'])->name('category-unit');
Route::post('/products/category', [CategoryStoreController::class, 'addcategory'])->name('category.add');
Route::get('/products/category/{id}/edit', [CategoryStoreController::class, 'edit'])->name('category.edit');
Route::delete('/products/category/{id}', [DeleteController::class, 'destroy'])->name('category.destroy');
Route::post('/products/unit', [CategoryStoreController::class, 'addunit'])->name('unit.add');

Route::get('/products/stockout', [StockOutController::class, 'index']);
Route::post('/products/add-stockout', [AddStockOutController::class, 'addstockout']);

Route::get('/products/stock-opname', [StockOpnameController::class, 'index']);
Route::post('/products/add-stockopname', [CreateStockOpnameController::class, 'addstockopname']);

//Kas ----------------------------------------------------------------------------

Route::get('/kas', [KasController::class, 'index']);
Route::post('/kas/add', [AddKasController::class, 'addkas']);

//Supplier -----------------------------------------------------------------------

Route::get('/supplier', [SuppliersController::class, 'index']);
Route::post('/supplier/add-supplier', [AddSupplierController::class, 'addsupplier']);

//Customer -----------------------------------------------------------------------

Route::get('/customers', [CustomersController::class, 'index']);
Route::post('/products/add-customer', [AddCustomersController::class, 'addcustomer']);

//Reposrt -----------------------------------------------------------------------

Route::get('/report/sales-report', [SalesReportController::class, 'index']);

Route::get('/report/stockin-out', [StockInOutController::class, 'index']);

Route::get('/report/profit-loss', [ProfitLossController::class, 'index']);

Route::get('/report/debt-report', [DebtReportController::class, 'index']);

//User -----------------------------------------------------------------------

Route::get('/user', [UserController::class, 'index']);
Route::post('/user/add-user', [AddUserController::class, 'adduser']);



// Route::get('/stockin', function() {
//     return view('products/stockin');    
// });

//Setting -----------------------------------------------------------------------

Route::get('/setting', [SettingController::class, 'index']);
Route::post('/setting/add-data', [AddSettingController::class, 'addsetting']);
