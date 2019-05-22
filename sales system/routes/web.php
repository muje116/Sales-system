<?php

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

//Route::group(['prefix', '/', 'middleware' => 'auth'], function(){
    Auth::routes();



    Route::get('/admin/', function () {
      $lpo = \App\Sales::where('payment_type','=','lpo')->sum('amount');

      $cash = \App\Sales::where('payment_type','=','cash')->sum('amount');

      $cheque = \App\Sales::where('payment_type','=','cheque')->sum('amount');

      $credit = \App\Sales::where('payment_type','=','credit')->sum('amount');
    return view('admin.index',['lpo'=>$lpo],['cash'=>$cash])->with('credit', $credit)->with('cheque', $cheque)->with('products', \App\Product::all())->with('sales', \App\Sales::all());
})->name('dashboard');


//reports
Route::get('/admin/reports', [
    'uses' =>'ReportsController@index',
    'as' => 'reports'
]);
Route::post('/admin/reports/overall', [
    'uses' =>'ReportsController@display',
    'as' => 'display'
]);

Route::get('/admin/reports/overall', [
    'uses' =>'ReportsController@overall',
    'as' => 'overall'
]);
Route::get('/admin/reports/receivables', [
    'uses' =>'ReportsController@receivables',
    'as' => 'receivables'
]);
Route::get('/admin/reports/chart', [
    'uses' =>'ReportsController@chart',
    'as' => 'chart'
]);

Route::get('/admin/reports/inventory', [
    'uses' =>'ReportsController@inventory',
    'as' => 'repo.inventory'
]);

//routes for products
//Route::resource('products', 'ProductsController');
Route::get('/admin/products',[
   'uses' => 'ProductsController@index',
   'as' => 'products'
]);
Route::post('/admin/products/store',[
    'uses' => 'ProductsController@store',
    'as' => 'products.store'
]);
Route::get('/admin/products',[
    'uses' => 'ProductsController@index',
    'as' => 'products'
]);
Route::post('/admin/products/update/{id}', [
    'uses' => 'ProductsController@update',
    'as' => 'products.update'
]);
Route::get('/admin/Products/delete/{id}', [
    'uses' => 'ProductsController@destroy',
    'as' => 'products.destroy'
]);
Route::get('/admin/Products/reorders', [
    'uses' => 'ProductsController@reorder',
    'as' => 'products.reorder'
]);


//Route::resource('categories', 'CategoriesController');
//route for categories
Route::get('/admin/categories', [
    'uses' => 'CategoriesController@index',
    'as' => 'categories'
]);
Route::post('/admin/categories/store', [
    'uses' => 'CategoriesController@store',
    'as' => 'categories.store'
]);

Route::post('/admin/categories/update/{id}', [
    'uses' => 'CategoriesController@update',
    'as' => 'categories.update'
]);
Route::get('/admin/categories/delete/{id}', [
    'uses' => 'CategoriesController@destroy',
    'as' => 'categories.destroy'
]);

Route::get('/admin/users', [
    'uses' => 'UsersController@index',
    'as' => 'users.index'
]);
Route::get('/logout', [
    'uses' => 'UsersController@logout',
    'as' => 'logout'
]);

    Route::post('/admin/users/update/{id}', [
        'uses' => 'UsersController@update',
        'as' => 'users.update'
    ]);
Route::post('/admin/users/store', [
    'uses' => 'usersController@store',
    'as' => 'users.store'
]);

Route::post('/admin/users/update/{id}', [
    'uses' => 'UsersController@update',
    'as' => 'users.update'
]);
Route::get('/admin/users/delete/{id}', [
    'uses' => 'UsersController@destroy',
    'as' => 'users.destroy'
]);

//admin customers
Route::get('/admin/customers', 'CustomerController@admin_index')->name('admin_index');
Route::post('/admin/customers/store', 'CustomerController@admin_store')->name('admin_store');
Route::post('/admin/customers/update/{id}', 'CustomerController@update')->name('admin_update');
Route::get('/admin/customers/delete/{id}', 'CustomerController@destroy')->name('admin_delete');




#Route::resource('users', 'UsersController');

#Route::resource('reports', 'ReportsController');

Route::get('/admin/suppliers', [
  'uses' => 'SuppliersController@index',
  'as' => 'suppliers'
]);

Route::get('/admin/suppliers/create', [
  'uses' => 'SuppliersController@create',
  'as' => 'suppliers.create'
]);

Route::post('/admin/suppliers/store', [
  'uses' => 'SuppliersController@store',
  'as' => 'suppliers.store'
]);

Route::get('/admin/suppliers/edit/{id}', [
  'uses' => 'SuppliersController@edit',
  'as' => 'suppliers.edit'
]);

Route::post('/admin/suppliers/update/{id}', [
    'uses' => 'SuppliersController@update',
    'as' => 'suppliers.update'
]);

Route::get('/admin/suppliers/delete/{id}', [
  'uses' => 'SuppliersController@destroy',
  'as' => 'suppliers.destroy'
]);

/*
Route::get('/dashboard', function (){
    return view('admin.index');
})->name('dashboard');*/
//normal user routes
//route for viewing inventory

//testing route theory

// route for shop
Route::get('/admin/shop', [
    'uses' => 'CompanyController@index',
    'as' => 'shop'
]);
Route::post('/admin/shop', [
    'uses' => 'CompanyController@store',
    'as' => 'shop.store'
]);
Route::post('/admin/shop/update/{id}', [
    'uses' => 'CompanyController@update',
    'as' => 'shop.update'
]);
Route::get('/admin/shop/delete/{id}', [
    'uses' => 'CompanyController@destroy',
    'as' => 'shop.destroy'
]);

//});//closing the middleware



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/public/products/reorder', [
    'uses' => 'ProductsController@reorders',
    'as' => 'reorder'
]);
//normal users page
Route::get('/public/users', [
    'uses' => 'UsersController@view',
    'as' => 'users.view'
]);
Route::post('/public/users/update/{id}', [
    'uses' => 'UsersController@change',
    'as' => 'users.change'
]);
Route::get('/public/inventory', [
    'uses' => 'ItemsController@index',
    'as' => 'inventory'
]);
Route::get('/public/stock', [
    'uses' => 'ItemsController@stock',
    'as' => 'stock'
]);
//route for adding inventory
Route::get('/public/products/add', [
    'uses' => 'ItemsController@add',
    'as' => 'stock.add'
]);
//route for storing inventory
Route::post('/public/products/store', [
    'uses' => 'ItemsController@store',
    'as' => 'inventory.store'
]);

//Quotations
Route::post('/public/quotations/add', [
    'uses' => 'QuotationsController@add_to_cart',
    'as' => 'cart.add'
]);

Route::get('/public/quotations/main', [
    'uses' => 'QuotationsController@cart',
    'as' => 'cart'
]);

Route::get('/public/quotations/cart/delete/{id}', [
    'uses' => 'QuotationsController@cart_delete',
    'as' => 'cart.delete'
]);
Route::get('/public/quotations/cart/decr/{id}/{qty}', [
    'uses' => 'QuotationsController@decr',
    'as' => 'cart.decr'
]);
Route::get('/public/quotations/cart/incr/{id}/{qty}', [
    'uses' => 'QuotationsController@incr',
    'as' => 'cart.incr'
]);

Route::get('/public/quotations/cart/rapid/add/{id}', [
    'uses' => 'QuotationsController@rapid_add',
    'as' => 'rapid.add'
]);

Route::get('/public/quotations/preview', [
    'uses' => 'QuotationsController@preview',
    'as' => 'quo.preview'
]);
Route::post('/public/quotations/cart/checkout', [
    'uses' => 'CheckoutController@pay',
    'as' => 'cart.checkout'
]);

Route::post('/public/quotations/cart/record', [
    'uses' => 'QuotationsController@record',
    'as' => 'record'
]);

Route::get('/public/quotations',[
    'uses' => 'QuotationsController@index',
    'as' => 'quotations'
]);
Route::get('/public/quotations/customers',[
    'uses' => 'CheckoutController@details',
    'as' => 'quo.details'
]);
Route::get('/public/quotations/customers',[
    'uses' => 'CheckoutController@cus',
    'as' => 'quo.cus'
]);
Route::get('/public/quotations/quotations',[
    'uses' => 'CheckoutController@quotation',
    'as' => 'quo.list'
]);
Route::get('/public/quotations/details/{id}',[
    'uses' => 'CheckoutController@quotation_view',
    'as' => 'quo.details'
]);
Route::get('/public/quotations/print',[
    'uses' => 'CheckoutController@print',
    'as' => 'print'
]);
Route::post('/public/quotations/stores',[
    'uses' => 'CheckoutController@store',
    'as' => 'quotations.store'
]);
Route::post('/public/quotations/store',[
    'uses' => 'CustomerController@quick',
    'as' => 'quick'
]);

Route::get('/public/quotations/ind', [
    'uses' => 'CheckoutController@back',
    'as' => 'back'
]);

//routeS for sales

Route::get('/public/sales', [
    'uses' => 'SalesController@index',
    'as' => 'sales'
]);

Route::post('/public/sales/add', [
    'uses' => 'SalesController@sales_add',
    'as' => 'sales.add'
]);
Route::post('/public/malonda/include','SalesController@store')->name('malonda');

Route::get('/public/sales/pay', [
    'uses' => 'SalesController@pay',
    'as' => 'sales.pay'
]);
Route::post('/public/sales/keep', [
    'uses' => 'SalesController@stores',
    'as' => 'sales.store'
]);
Route::get('/public/sales/credit', [
    'uses' => 'SalesController@credit',
    'as' => 'sales.credit'
]);
Route::get('/public/reports/lpo', [
    'uses' => 'ReportsController@lpo',
    'as' => 'sales.lpo'
]);
Route::get('/public/sales/cash', [
    'uses' => 'SalesController@cash',
    'as' => 'sales.cash'
]);
Route::get('/public/sales/stock/{id}', [
    'uses' => 'SalesController@saleProducts',
    'as' => 'listing'
]);
Route::get('/public/sales/rapid_add/{id}', [
    'uses' => 'SalesController@rapid_sales',
    'as' => 'rapid'
]);
Route::get('/public/reports/cheque/', [
    'uses' => 'SalesController@cheque',
    'as' => 'cheque'
]);
Route::post('/public/sales/cash/store', [
    'uses' => 'SalesController@cashpayment',
    'as' => 'cash.store'
]);
Route::post('/public/sales/lpo/store', [
    'uses' => 'SalesController@lpopayment',
    'as' => 'lpo.store'
]);
Route::get('/public/sales/credit/store', [
    'uses' => 'SalesController@creditpayment',
    'as' => 'credit.store'
]);

Route::get('/public/sales/rapid/{id}', [
    'uses' => 'SalesController@rapid_add',
    'as' => 'rapi'
]);
// customer
Route::get('/public/customers', [
    'uses' => 'CustomerController@index',
    'as' => 'customers'
]);
Route::post('/public/customer/store',[
    'uses' => 'CustomerController@salesc',
    'as' => 'salo'
]);
Route::get('/public/lpo', [
    'uses' => 'LpoController@index',
    'as' => 'lpo'
]);

//route for normal user reports

Route::get('/public/reports', [
    'uses' => 'UserReportsController@index',
    'as' => 'userRepo'
]);

Route::get('/public/reports/sales', [
    'uses' => 'UserReportsController@sales',
    'as' => 'salesrep'
]);
Route::post('/public/reports/sales', [
    'uses' => 'UserReportsController@sales_display',
    'as' => 'salesdisplay'
]);
Route::post('/public/reports/inventory', [
    'uses' => 'UserReportsController@inventory_display',
    'as' => 'invedisplay'
]);
Route::post('/public/reports/receivebles', [
    'uses' => 'UserReportsController@receive_display',
    'as' => 'receivedisplay'
]);
Route::post('/public/reports/income', [
    'uses' => 'UserReportsController@income_display',
    'as' => 'incomedisplay'
]);

Route::get('/public/reports/receivables', [
    'uses' => 'UserReportsController@receivables',
    'as' => 'receive'
]);

Route::get('/public/reports/income', [
    'uses' => 'UserReportsController@income',
    'as' => 'income'
]);

Route::get('/public/reports/inventories', [
    'uses' => 'UserReportsController@inventory',
    'as' => 'inventoryrep'
]);
Route::get('/public/reports/stock', [
    'uses' => 'UserReportsController@inventories',
    'as' => 'inventorie'
]);

Route::get('/public/reports/allSales','ReportsController@all_sales')->name("allsales");
Route::get('/public/reports/allSale/view/{id}', [
    'uses' => 'ReportsController@view_sales',
    'as' => 'view_sales'
]);
Route::get('/public/reports/sales/view/{sales_id}','ReportsController@view_sales')->name('tione');
Route::get('/public/reports/chequeDetails/{id}','ReportsController@view_cheque')->name('view_cheque');
Route::get('/public/reports/salo','UserReportsController@salo_date')->name('salo_date');
Route::post('/public/reports/saloDetails','UserReportsController@sales_display')->name('salo_display');
Route::get('/public/reports/lpo_view/{id}','UserReportsController@lpo_view')->name('view_lpo');


//routes for customers
Route::get('/public/customer',[
    'uses' => 'CustomerController@lists',
    'as' => 'customer_list'
]);
Route::get('/public/customers/create',[
    'uses' => 'CustomerController@add',
    'as' => 'customer.add'
]);
Route::post('/public/customers/store',[
    'uses' => 'CustomerController@store',
    'as' => 'customer.store'
]);
Route::get('/public/sale',[
    'uses' => 'SalesController@index',
    'as' => 'sales'
]);
Route::get('/public/sales_customers',[
    'uses' => 'CustomerController@sales_customers',
    'as' => 'sales_cus'
]);
Route::get('/public/sales/{id}',[
    'uses' => 'SalesController@index',
    'as' => 'sales.go'
]);
Route::get('/public/sales/customer',[
    'uses' => 'SalesController@customer',
    'as' => 'add.cus'
]);
Route::get('/public/sales/print','SalesController@print')->name('print');
Route::get('/public/sales/print_back','SalesController@back_to_sale')->name('back_to_sale');
