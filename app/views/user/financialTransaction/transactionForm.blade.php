@extends('layouts.user.userLayout')
@section('content')
@if($way=='creditBankTransaction')

{{link_to('financialTransaction/creditBankTransaction', 'Credit Bank Transaction', $attributes = array('way'=>'creditBankTransaction'), $secure = null) }}
@elseif($way=='creditCashTransaction')
{{$way}}
@elseif($way=='debitBankTransaction')
{{$way}}
@elseif($way=='debitCashTransaction')
{{$way}}


@else 
@{{invalid }}

@endif

@stop