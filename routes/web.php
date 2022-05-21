<?php
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/Customer/registor_for_license',[CustomerController::class,'registor_for_license'])->name('Customer/registor_for_license');
Route::post('Customer.registor_for_license',[CustomerController::class,'store'])->name('Customer/registor_for_license');
Route::get('/Customer/get_license', [CustomerController::class, 'get_license'])->name('Customer/get_license');
Route::get('/Customer/update_license/{id}', [CustomerController::class, 'update_license']);
Route::post('/Customer/update_customer_license',[CustomerController::class,'update_customer_license'])->name('Customer/update_customer_license');
Route::get('/Customer/cancel_customer_license/{id}', [CustomerController::class, 'cancel_customer_license']);
Route::get('/Customer/get_by_id/{id}', [CustomerController::class, 'get_by_id']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
