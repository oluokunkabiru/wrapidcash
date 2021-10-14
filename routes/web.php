<?php

use Illuminate\Auth\Notifications\VerifyEmail;
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
Route::get('/register/{id}/referral', 'ReferralController@referralLink')->name('investor-referral');

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'admin', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', 'admin\AdminControler@index')->name('admindashboard');
    Route::resource('users', 'admin\UsersController');
    Route::resource('transaction-history', 'admin\TransactionController');
    Route::resource('withdraw-request', 'admin\WithdrawController');
    Route::get('/payment/method/{id}/transfer/{status}', 'admin\WithdrawController@withdrawStatus')->name('payment-transfer');
    Route::resource('wrap-coin', 'admin\CoinController');
    Route::resource('role', 'admin\RoleController');
    Route::get('/withdraw-request/{id}/processing/{name}', 'admin\WithdrawController@processWithdraw')->name('process-withdraw');
    Route::resource('investment-progress', 'admin\InvestmentController');
    Route::resource('permission', 'admin\PermissionController');
    Route::resource('site-configuration', 'admin\AdminControler');
    Route::post('remove-permission', 'admin\PermissionController@removepermission')->name('remove-permission');
    Route::get('/site-settin/configuration', 'admin\AdminControler@create')->name('site-setting');
    Route::get('/disabled/{id}/wrap-coin', 'admin\CoinController@disable')->name('disabled-wrap-coin');
    Route::get('/enabled/{id}/wrap-coin', 'admin\CoinController@enable')->name('enabled-wrap-coin');
    Route::get('/disabled/{id}/users', 'admin\UsersController@disables')->name('disabled-user');
    Route::get('/enabled/{id}/users', 'admin\UsersController@enable')->name('enable-user');
    Route::get('/active/investment', 'admin\InvestmentController@active')->name('active-investment');
    Route::get('/pending/investment', 'admin\InvestmentController@pending')->name('pending-investment');
    Route::get('/ended/investment', 'admin\InvestmentController@ended')->name('ended-investment');
    Route::get('/withdrawer/processed/investment', 'admin\InvestmentController@withdrawed')->name('withdrawed-investment');

});
Route::middleware(['auth', 'users', 'verified'])->prefix('investor')->group(function () {
    Route::get('dashboard', 'investor\InvestorController@index')->name('usersdashboard');
    Route::resource('bank', 'investor\BankController');
    Route::resource('withdrawer-request', 'investor\WithdrawerRequest');
    Route::get('/account-setting', 'investor\BankController@accountSetting')->name('account_setting');
    Route::get('/transaction-history', 'investor\BankController@transactionHistory')->name('transaction_history');
    Route::get('/withdraw-request', 'investor\BankController@withdrawRequest')->name('withdraw-request');
    Route::get('/referral-withdraw-request', 'investor\BankController@refwithdrawRequest')->name('referral-withdraw-request');
    Route::get('/all-withdraw-request', 'investor\WithdrawerRequest@index')->name('all-withdraw-request');
    Route::post('/referral-withdraw-request', 'investor\WithdrawerRequest@refWithdrawRequest')->name('referral-withdraw-request');
    Route::get('/request-withdraw/{id}/{name}/payment', 'investor\BankController@withdrawMyMoney')->name('request-my-money');
    Route::post('/get-account-details', 'investor\BankController@validateAccountNumber')->name('get-account-details');
    Route::resource('coin', 'investor\CoinController');
    Route::post('/get-coin-prices', 'investor\CoinController@coinPrice')->name('quantity-pricing');
    Route::resource('investment', 'InvestmentController');
    Route::resource('investor', 'investor\InvestorController');
    Route::get('coin-detal/{id}/order-now', 'investor\CoinController@coinDetail')->name('order-coin');
    // paystack
    Route::post('/pay', 'investor\PaymentController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'investor\PaymentController@handleGatewayCallback');
    Route::get('/profile/settings', 'InvestmentController@edit')->name('profile-setting');
    //end paystack
});
Route::middleware(['auth'])->group(function () {
    Route::get('mark-as-read/{id}', 'admin\UsersController@readNotification')->name('mark-as-read');
    Route::get('mark-all-as-read', 'admin\UsersController@readAllNotification')->name('mark-all-as-read');

});
