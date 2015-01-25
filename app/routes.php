<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/**/
Route::get('/', function()
{
	return View::make('user.home');
	
});
Route::get('financialTransaction', function()
{
	return View::make('user.financialTransaction');
	
});
Route::get('financialTransaction/{way}' ,array('as'=>'transactionWayControler','uses'=>'financialTransactionController@transactionPurposeControler'));

/*Route::get('financialTransaction/{way}', function($way)
{
	return View::make('user.financialTransaction.transactionForm')
	->with(array('way'=>$way));
	
});*/

Route::get('financialTransaction/{way}/{purposeId}', function($way,$purposeId){
	$purpose=Purpose::find($purposeId);
	$voucherNo=Voucher::find(1);
	//$banks=Bank::all('bankName');
	$banks=DB::table('banks')->lists('bankName');
	foreach($banks as $bank)
		$banksArray[$bank]=$bank;
	
	return View::make('user.formContent')
	->with(array('purpose'=>$purpose->purpose,'way'=>$way,'voucherNo'=>$voucherNo->voucherNo,'banks'=>$banksArray));
	
	
});
Route::get('debitRecord', function()
{
	return View::make('user.debitRecord');
	
});
Route::POST('transaction/save', function()
{
	$data = Input::all();
	return View::make('user.debitRecord');
	
});
Route::post('transaction/save' ,array('uses'=>'financialTransactionController@creditTransactionSave'));
Route::get('creditRecord', function()
{
	return View::make('user.creditRecord');
	
});
Route::get('bankRecord', function()
{
	return View::make('user.bankRecord');
	
});
Route::get('pettyCashRecord', function()
{
	return View::make('user.pettyCashRecord');
	
});
Route::get('creditBankTransaction', function()
{

return View::make('user.financialTransaction.creditBankTransaction');
	
});
Route::get('creditCashTransaction', function()
{
	return View::make('user.financialTransaction.creditCashTransaction');
	
});
Route::get('debitBankTransaction', function()
{
	return View::make('user.financialTransaction.debitBankTransaction');
	
});
Route::get('debitCashTransaction', function()
{
	return View::make('user.financialTransaction.debitCashTransaction');
	
});


