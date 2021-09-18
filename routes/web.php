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
});
Route::middleware(['auth', 'users'])->prefix('investor')->group(function () {
    Route::get('dashboard', 'investor\InvestorController@index')->name('usersdashboard');
    Route::resource('bank', 'investor\BankController');
    Route::get('/account-setting', 'investor\BankController@accountSetting')->name('account_setting');
    Route::get('/transaction-history', 'investor\BankController@transactionHistory')->name('transaction_history');
    Route::get('/withdraw-request', 'investor\BankController@withdrawRequest')->name('withdraw-request');
    Route::resource('coin', 'investor\CoinController');
    Route::get('coin-detal/{id}/order-now', 'investor\CoinController@coinDetail')->name('order-coin');
});
