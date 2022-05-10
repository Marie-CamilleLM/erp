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
Route::get('/', function() {
	return view('home');
});
Route::get('/company', 'CompanyController@index')
	->name('company.index');
Route::get('/product', 'ProductController@index')
	->name('product.index');
Route::get('/provider', 'ProviderController@index')
	->name('provider.index');
Route::get('/client', 'ClientController@index')
	->name('client.index');
Route::get('/employee', 'EmployeeController@index')
	->name('employee.index');
Route::post('/company', [App\Http\Controllers\CompanyController::class, 'store']);
Route::post('/product', [App\Http\Controllers\ProductController::class, 'store']);
Route::post('/provider', [App\Http\Controllers\ProviderController::class, 'store']);
Route::post('/client', [App\Http\Controllers\ClientController::class, 'store']);
Route::post('/employee', [App\Http\Controllers\EmployeeController::class, 'store']);
Route::delete('/company/{id}', 'CompanyController@delete')
    ->name('company.destroy');
Route::delete('/product/{id}', 'ProductController@delete')
    ->name('product.destroy');
Route::delete('/provider/{id}', 'ProviderController@delete')
    ->name('provider.destroy');
Route::delete('/client/{id}', 'ClientController@delete')
    ->name('client.destroy');
Route::delete('/employee/{id}', 'EmployeeController@delete')
    ->name('employee.destroy');
