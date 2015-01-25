@extends('layouts.user.userLayout')



@section('content')

<div class='thumb-row'>
   <div class='thumb'> 
	{{link_to('financialTransaction', 'Financial Transaction', $attributes = array(), $secure = null) }}
   </div>
   <div class='thumb'> 
   {{ link_to('debitRecord', 'Debit Record', $attributes = array(), $secure = null) }}
   </div>
   <div class='thumb'> 
   {{ link_to('creditRecord', 'Credit Record', $attributes = array(), $secure = null) }}
   </div>
  </div>
  <div class='thumb-row'>
   <div class='thumb'> 
   {{ link_to('bankRecord', 'Bank Record', $attributes = array(), $secure = null) }}
   </div>
   <div class='thumb'> 
   {{ link_to('pettyCashRecord', 'Petty Cash Record', $attributes = array(), $secure = null) }}
   </div>
   
   </div>   

@stop