<?php
class financialTransactionController extends BaseController{
	
		public $restful=true;
		
		public function transactionPurposeControler($way)
			{
				$purposes = Purpose::all();
				$view=View::make('user.purposeView')
				->with(array('way'=>$way,'purposes'=>$purposes));
				
				return $view;		
			}
		public function creditTransactionSave(){
			
				$purpose=Input::get('purpose');
				if($purpose=='Bank Loan'){
				DB::table('creditPurposes')->insert(array('date' => Input::get('date'),'voucherNO' => Input::get('voucherNo'),'purpose' => Input::get('purpose'),'amount' => Input::get('Amount'),'Note' => Input::get('Note'),'loneTransactionId' => Input::get('LoanTransactionId'),'bankName' => Input::get('bankName'),'accountNo' => Input::get('BankAccountNo')));
				
				//$purpose = Input::get('purpose');
				$type='credit';
				//$purposeId=Purpose::getUserId('credit',Input::get('purpose'));
				$purposeId=Purpose::where(function($query)
													{
														$query->where('purpose', '=', Input::get('purpose'))
																->where('type', '=', 'credit');
															})->first()->id;
				}
				
				
				return Redirect::to("financialTransaction/credit/$purposeId")->with('message',"$purpose Record saved" );
				
			}
};
?>