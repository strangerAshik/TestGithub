@extends('layouts.user.userLayout')
@section('content')
<div class='thumb-row'>
   <div class='thumb'> 
	{{link_to('financialTransaction/credit', 'Credit', $attributes = array(), $secure = null) }}
   </div>
   <div class='thumb'> 
   {{ link_to('financialTransaction/debit', 'Debit', $attributes = array(), $secure = null) }}
   </div>
   
@stop