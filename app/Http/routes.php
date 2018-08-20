<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Bank;
use App\Beneficiary;
use App\Info;
use App\Withdrawal;
use Illuminate\Http\Request;

Route::get('/', function () {


   $withdrawals=Withdrawal::all();
    $withdrawal=Withdrawal::latest()->first();

   /* $info=Info::orderby('created_at', 'desc')->latest()->first();
    $newbalance= $info->total_balance - $withdrawal->amount;*/
    $beneficiaries=Beneficiary::orderby('created_at', 'desc')->pluck('account_name', 'id')->all();
    return view('welcome' , compact('beneficiaries', 'withdrawals','withdrawal'));



});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('beneficiary', 'BeneficiaryController');
Route::resource('withdrawal', 'WithdrawalController');
Route::post('beneficiary/create', ['uses'=>'BeneficiaryController@store', 'middleware'=>'auth'])->name('beneficiary.store');
Route::post('withdrawal/make', ['uses'=>'WithdrawalController@store'])->name('withdrawal.make');
Route::post('accountInfo', 'accountInfo@InfoController')->name('account.info');
