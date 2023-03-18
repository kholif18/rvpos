<?php

use App\Http\Controllers\Customers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Kas\AddKasController;
use App\Http\Controllers\Kas\KasController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Products\Category\Ajax\StoreController as CategoryAjaxStoreController;
use App\Http\Controllers\Products\Category\Ajax\SaveController as CategoryAjaxSaveController;
use App\Http\Controllers\Products\Category\Ajax\DeleteController as CategoryAjaxDeleteController;
use App\Http\Controllers\Products\Category\CategoryController;
use App\Http\Controllers\Products\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Products\Products\ProductsController;
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

Route::get('/products/products', [ProductsController::class, 'index'])->name('products');
Route::post('/products/add-product', [ProductsController::class, 'store'])->name('product.add');
Route::post('/products/show', [ProductsController::class, 'show'])->name('product.show');
Route::delete('/products/product/{id}', [ProductsController::class, 'destroy'])->name('product.delete');

Route::group([
    'prefix' => '/products',
    'as' => 'products.',
], function () {
    Route::get('/category-unit', [CategoryIndexController::class, 'index'])->name('category-unit.index');

    Route::group([
        'prefix' => '/categories',
        'as' => 'categories.ajax.',
    ], function () {
        Route::post('/ajax', [CategoryAjaxStoreController::class, 'store'])->name('store');
        Route::put('/ajax/{cateogry}', [CategoryAjaxSaveController::class, 'save'])->name('save');
        Route::delete('/ajax/{category}', [CategoryAjaxDeleteController::class, 'delete'])->name('delete');
    });
});

Route::post('/products/category', [CategoryController::class, 'storecategory'])->name('category.add');
Route::post('/products/category/category-update/{id}', [CategoryController::class, 'categoryupdate'])->name('category.update');
Route::get('/products/category/{id}/edit', [CategoryController::class, 'categoryedit'])->name('category.edit');
Route::delete('/products/category/{id}', [CategoryController::class, 'categorydestroy'])->name('category.destroy');

Route::get('/products/unit-create', [CategoryController::class, 'createunit'])->name('unit.create');
Route::get('/products/unit-show', [CategoryController::class, 'show'])->name('unit.show');
Route::post('/products/unit', [CategoryController::class, 'storeunit'])->name('unit.add');
Route::get('/products/unit/{id}/edit', [CategoryController::class, 'unitedit'])->name('unit.edit');
Route::delete('/products/unit/{id}', [CategoryController::class, 'unitdestroy'])->name('unit.delete');

Route::get('/products/stockout', [StockOutController::class, 'index'])->name('stockout');
Route::post('/products/add-stockout', [AddStockOutController::class, 'addstockout'])->name('stockout.add');

Route::get('/products/stock-opname', [StockOpnameController::class, 'index'])->name('stockopname');
Route::post('/products/add-stockopname', [StockOpnameController::class, 'store'])->name('stockopname.add');

//Kas ----------------------------------------------------------------------------

Route::get('/kas', [KasController::class, 'index']);
Route::post('/kas/add', [AddKasController::class, 'addkas']);

//Supplier -----------------------------------------------------------------------

Route::get('/supplier', [SuppliersController::class, 'index'])->name('supplier');
Route::resource('/supplier', SuppliersController::class);

//Customer -----------------------------------------------------------------------

Route::get('/customers', [CustomersController::class, 'index'])->name('customer');
Route::post('/products/add-customer', [CustomersController::class, 'store'])->name('customer.add');
Route::delete('/customer/{id}', [CustomersController::class, 'destroy'])->name('customer.destroy');

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
