<?php

use App\Http\Controllers\Customers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Kas\AddKasController;
use App\Http\Controllers\Kas\KasController;
use App\Http\Controllers\Login\LoginController;

use App\Http\Controllers\Products\Products\IndexController as ProductsIndexController;
use App\Http\Controllers\Products\Products\Ajax\StoreController as ProductsAjaxStoreController;
use App\Http\Controllers\Products\Products\Ajax\SaveController as ProductsAjaxSaveController;
use App\Http\Controllers\Products\Products\Ajax\DetailController as ProductsAjaxDetailController;
use App\Http\Controllers\Products\Products\Ajax\DeleteController as ProductsAjaxDeleteController;

use App\Http\Controllers\Products\Category\Ajax\DetailController as CategoryAjaxDetailController;
use App\Http\Controllers\Products\Category\Ajax\StoreController as CategoryAjaxStoreController;
use App\Http\Controllers\Products\Category\Ajax\SaveController as CategoryAjaxSaveController;
use App\Http\Controllers\Products\Category\Ajax\DeleteController as CategoryAjaxDeleteController;

use App\Http\Controllers\Products\Unit\Ajax\DetailController as UnitAjaxDetailController;
use App\Http\Controllers\Products\Unit\Ajax\StoreController as UnitAjaxStoreController;
use App\Http\Controllers\Products\Unit\Ajax\SaveController as UnitAjaxSaveController;
use App\Http\Controllers\Products\Unit\Ajax\DeleteController as UnitAjaxDeleteController;
use App\Http\Controllers\Products\Category\IndexController as CategoryIndexController;

use App\Http\Controllers\Supplier\Ajax\DetailController as SupplierAjaxDetailController;
use App\Http\Controllers\Supplier\Ajax\StoreController as SupplierAjaxStoreController;
use App\Http\Controllers\Supplier\Ajax\SaveController as SupplierAjaxSaveController;
use App\Http\Controllers\Supplier\Ajax\DeleteController as SupplierAjaxDeleteController;
use App\Http\Controllers\Supplier\IndexController as SupplierIndexController;

use App\Http\Controllers\Customers\Ajax\DetailController as CustomersAjaxDetailController;
use App\Http\Controllers\Customers\Ajax\StoreController as CustomersAjaxStoreController;
use App\Http\Controllers\Customers\Ajax\SaveController as CustomersAjaxSaveController;
use App\Http\Controllers\Customers\Ajax\DeleteController as CustomersAjaxDeleteController;
use App\Http\Controllers\Customers\IndexController as CustomersIndexController;

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
use App\Http\Controllers\Supplier\CodeController;
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

Route::get('/transactions/list-pos', [ListPostController::class, 'index'])->name('list-pos');

Route::get('/transactions/debt', [DebtController::class, 'index'])->name('debt');

Route::get('/transactions/debtpay', [DebtPayController::class, 'index'])->name('debt.pay');

//Purchases -----------------------------------------------------------------------

Route::get('/purchases/purchase', [PurchaseController::class, 'index']);

Route::get('/purchases/list-purchases', [ListPurchasesController::class, 'index']);

//Products -----------------------------------------------------------------------

// Route::get('/products/products', [ProductsController::class, 'index'])->name('products');
// Route::post('/products/add-product', [ProductsController::class, 'store'])->name('product.add');
// Route::post('/products/show', [ProductsController::class, 'show'])->name('product.show');
// Route::delete('/products/product/{id}', [ProductsController::class, 'destroy'])->name('product.delete');

Route::group([
    'prefix' => '/products',
    'as' => 'products.',
], function () {
    Route::get('/products', [ProductsIndexController::class, 'index'])->name('products.index');
    Route::group([
        'prefix' => '/products',
        'as' => 'products.ajax.',
    ], function () {
        Route::get('/ajax/{product}', [ProductsAjaxDetailController::class, 'get'])->name('detail');
        Route::post('/ajax', [ProductsAjaxStoreController::class, 'store'])->name('store');
        Route::put('/ajax/{product}', [ProductsAjaxSaveController::class, 'save'])->name('save');
        Route::delete('/ajax/{product}', [ProductsAjaxDeleteController::class, 'delete'])->name('delete');
    });

    Route::get('/category-unit', [CategoryIndexController::class, 'index'])->name('category-unit.index');

    Route::group([
        'prefix' => '/categories',
        'as' => 'categories.ajax.',
    ], function () {
        Route::get('/ajax/{category}', [CategoryAjaxDetailController::class, 'get'])->name('detail');
        Route::post('/ajax', [CategoryAjaxStoreController::class, 'store'])->name('store');
        Route::put('/ajax/{category}', [CategoryAjaxSaveController::class, 'save'])->name('save');
        Route::delete('/ajax/{category}', [CategoryAjaxDeleteController::class, 'delete'])->name('delete');
    });

    Route::group([
        'prefix' => '/units',
        'as' => 'units.ajax.',
    ], function () {
        Route::get('/ajax/{unit}', [UnitAjaxDetailController::class, 'get'])->name('detail');
        Route::post('/ajax', [UnitAjaxStoreController::class, 'store'])->name('store');
        Route::put('/ajax/{unit}', [UnitAjaxSaveController::class, 'save'])->name('save');
        Route::delete('/ajax/{unit}', [UnitAjaxDeleteController::class, 'delete'])->name('delete');
    });
});

Route::get('/products/stockout', [StockOutController::class, 'index'])->name('stockout');
Route::post('/products/add-stockout', [AddStockOutController::class, 'addstockout'])->name('stockout.add');

Route::get('/products/stock-opname', [StockOpnameController::class, 'index'])->name('stockopname');
Route::post('/products/add-stockopname', [StockOpnameController::class, 'store'])->name('stockopname.add');

//Kas ----------------------------------------------------------------------------

Route::get('/kas', [KasController::class, 'index']);
Route::post('/kas/add', [AddKasController::class, 'addkas']);

//Supplier -----------------------------------------------------------------------

Route::get('/supplier', [SupplierIndexController::class, 'index'])->name('supplier');
Route::get('/supplier/code', [SupplierIndexController::class, 'supplierCode'])->name('supplier.code');
Route::get('/supplier/dataTable', [SupplierIndexController::class, 'loadDataTable'])->name('supplier.loadDataTable');

Route::get('/supplier/ajax/{supplier}', [SupplierAjaxDetailController::class, 'get'])->name('supplier.detail');
Route::post('/supplier/ajax', [SupplierAjaxStoreController::class, 'store'])->name('supplier.store');
Route::put('/supplier/ajax/{supplier}', [SupplierAjaxSaveController::class, 'save'])->name('supplier.save');
Route::delete('/supplier/ajax/{supplier}', [SupplierAjaxDeleteController::class, 'delete'])->name('supplier.delete');

//Customer -----------------------------------------------------------------------

Route::get('/customer', [CustomersIndexController::class, 'index'])->name('customer');
Route::get('/customer/code', [CustomersIndexController::class, 'customerCode'])->name('customer.code');
Route::get('/customer/dataTable', [CustomersIndexController::class, 'loadDataTable'])->name('customer.loadDataTable');

Route::get('/customer/ajax/{customer}', [CustomersAjaxDetailController::class, 'get'])->name('customer.detail');
Route::post('/customer/ajax', [CustomersAjaxStoreController::class, 'store'])->name('customer.store');
Route::put('/customer/ajax/{customer}', [CustomersAjaxSaveController::class, 'save'])->name('customer.save');
Route::delete('/customer/ajax/{customer}', [CustomersAjaxDeleteController::class, 'delete'])->name('customer.delete');

// Route::get('/customers', [CustomersController::class, 'index'])->name('customer');
// Route::post('/products/add-customer', [CustomersController::class, 'store'])->name('customer.add');
// Route::delete('/customer/{id}', [CustomersController::class, 'destroy'])->name('customer.destroy');

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
