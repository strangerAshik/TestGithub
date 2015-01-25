@extends('layouts.user.userLayout')
@section('content')

{{Form::open(array('url' =>'transaction/save', 'method' => 'POST'))}}
{{---------------------Debit Transaction----------------------------}}
{{---------Common---------}}	
{{$date=date("M d Y")}}
{{----Hidden-----}}	
{{Form::hidden('voucherNo', $voucherNo)}}
{{Form::hidden('date',$date)}}
{{Form::hidden('purpose', $purpose)}}
{{Form::label('id', 'Voucher No', array('class' => 'foo'))}}:  {{$voucherNo}}<br/>

{{Form::label('id', 'Date', array('class' => 'foo'))}}:  {{$date}}<br/>	

@if($way=='credit'&& $purpose=='Bank Loan')

{{Form::label('id', 'Loan Transaction Id', array('class' => 'foo'))}}: {{Form::text('LoanTransactionId')}}<br/>
{{Form::label('id', 'Bank Name', array('class' => 'foo'))}}: {{Form::select('bankName',$banks)}}<br/>
{{Form::label('id', 'Bank Account No', array('class' => 'foo'))}}: {{Form::select('BankAccountNo', array('key' => 'value','rere' => 're'))}}<br/>

{{Form::label('id', 'Amount', array('class' => 'foo'))}}: {{Form::text('Amount')}}<br/>
{{Form::label('id', 'Note', array('class' => 'foo'))}}
<br/>{{Form::textarea('Note')}}<br/>

@endif
{{Form::submit('Submit!', array('class' => 'name'))}}
{{Form::close()}}
@stop

