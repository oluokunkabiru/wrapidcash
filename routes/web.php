<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/' , 'PagesController@index')->name('welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', 'admin\AdminControler@index')->name('admindashboard');
    Route::resource('users', 'admin\UsersController');
    Route::resource('transaction-history', 'admin\TransactionController');
    Route::resource('withdraw-request', 'admin\WithdrawController');
    Route::resource('wrap-coin', 'admin\CoinController');
    Route::resource('role', 'admin\RoleController');
    Route::resource('permission', 'admin\PermissionController');
    Route::get('disabled/{id}/wrap-coin', 'admin\CoinController@disable')->name('disabled-wrap-coin');
    Route::get('enabled/{id}/wrap-coin', 'admin\CoinController@enable')->name('enabled-wrap-coin');
});
Route::middleware(['auth', 'users'])->prefix('investor')->group(function () {
    Route::get('dashboard', 'investor\InvestorController@index')->name('usersdashboard');
    Route::resource('bank', 'investor\BankController');
    Route::get('/account-setting', 'investor\BankController@accountSetting')->name('account_setting');
    Route::get('/transaction-history', 'investor\BankController@transactionHistory')->name('transaction_history');
    Route::get('/withdraw-request', 'investor\BankController@withdrawRequest')->name('withdraw-request');
    Route::resource('coin', 'investor\CoinController');
    Route::get('coin-detal/{id}/order-now', 'investor\CoinController@coinDetail')->name('order-coin');
    // paystack
    Route::post('/pay', 'investor\PaymentController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'investor\PaymentController@handleGatewayCallback');
    //end paystack
});
