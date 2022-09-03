<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

// start admin
Route::prefix('admin')->group(function () {
Route::get('', function () {
    return view('admin.dashboard');
})->middleware('auth');
Route::get('list-customers', function () {
    return view('admin.list-customers');
});
Route::get('view-customer', function () {
    return view('admin.view-customer');
});
Route::get('list-mvs', function () {
    return view('admin.list-mvs');
});
Route::get('view-mvs', function () {
    return view('admin.view-mvs');
});
Route::get('customer-rfqs', function () {
    return view('admin.customer-rfqs');
});
Route::get('view-rfq', function () {
    return view('admin.view-rfq');
});
Route::get('mvs-quotes', function () {
    return view('admin.mvs-quotes');
});
Route::get('view-mvs-quote', function () {
    return view('admin.view-mvs-quote');
});
Route::get('quotes-to-customer', function () {
    return view('admin.quotes-to-customer');
});
Route::get('view-quote-to-customer', function () {
    return view('admin.view-quote-to-customer');
});
Route::get('list-pos', function () {
    return view('admin.list-pos');
});
Route::get('list-proforma-invoice', function () {
    return view('admin.list-proforma-invoice');
});
Route::get('create-proforma-invoice', function () {
    return view('admin.create-proforma-invoice');
});
Route::get('list-sales-invoice', function () {
    return view('admin.list-sales-invoice');
});
Route::get('create-sales-invoice', function () {
    return view('admin.create-sales-invoice');
});
Route::get('list-products', function () {
    return view('admin.list-products');
});
Route::get('list-products', [ProductController::class, 'ShowProduct']);

Route::view('add-product','admin.add-product');
Route::post('add-product', [ProductController::class, 'AddProduct']);

});
// end admin

// start customer
Route::prefix('customer')->group(function () {
Route::get('', function () {
    return view('customer.dashboard');
});
Route::get('overview', function () {
    return view('customer.overview');
});
Route::get('edit-profile', function () {
    return view('customer.edit-profile');
});
Route::get('products', [ProductController::class, 'ShowCustomerProduct']);

Route::get('new-rfq', function () {
    return view('customer.new-rfq');
});
Route::get('list-rfq', function () {
    return view('customer.list-rfq');
});
Route::get('view-rfq', function () {
    return view('customer.view-rfq');
});
Route::get('list-quotes', function () {
    return view('customer.list-quotes');
});
Route::get('view-quote', function () {
    return view('customer.view-quote');
});
Route::get('sample-status', function () {
    return view('customer.sample-status');
});
Route::get('create-po', function () {
    return view('customer.create-po');
});
Route::get('list-pos', function () {
    return view('customer.list-pos');
});
Route::get('invoices', function () {
    return view('customer.invoices');
});
Route::get('invoices', function () {
    return view('customer.invoices');
});
Route::view('view-invoice', 'customer.view-invoice');
});
//customer end
// mvs start
Route::prefix('mvs')->group(function () {
Route::get('', function () {
    return view('mvs.mvs');
})->middleware('auth');
Route::get('profile', function () {
    return view('mvs.profile');
});
Route::get('edit-profile', function () {
    return view('mvs.edit-profile');
});
Route::get('list-rfq', function () {
    return view('mvs.list-rfqs');
});
Route::view('send-quote', 'mvs.send-quote');
Route::get('list-quotes', function () {
    return view('mvs.list-quotes');
});
Route::get('view-quote', function () {
    return view('mvs.view-quote');
});
Route::get('list-pos', function () {
    return view('mvs.list-pos');
});
Route::get('list-proforma-invoices', function () {
    return view('mvs.list-proforma-invoices');
});
Route::get('create-proforma-invoice', function () {
    return view('mvs.create-proforma-invoice');
});
Route::get('invoices', function () {
    return view('mvs.invoices');
});
Route::get('create-sales-invoice', function () {
    return view('mvs.create-sales-invoice');
});
Route::get('/home', function () {
    return view('home');
});
});
Auth::routes();

Route::get('/customer', [App\Http\Controllers\HomeController::class, 'index'])->name('customer');

Route::get('show', [ProductController::class, 'ShowColor']);
Route::view('color','customer.color');
Route::post('color', [ProductController::class, 'AddColor']);