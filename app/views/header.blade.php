@section('userHeader')
<div >
<ul>
  <li>{{ link_to('/', 'Home', $attributes = array(), $secure = null) }}</li>
  <li>{{ link_to('financialTransaction', 'Financial Transaction', $attributes = array(), $secure = null) }}</li>
  <li>{{ link_to('debitRecord', 'Debit Record', $attributes = array(), $secure = null) }}</li>
  <li>{{ link_to('creditRecord', 'Credit Record', $attributes = array(), $secure = null) }}</li>
  <li>{{ link_to('bankRecord', 'Bank Record', $attributes = array(), $secure = null) }}</li>
  <li>{{ link_to('pettyCashRecord', 'Petty Cash Record', $attributes = array(), $secure = null) }}</li>
</ul>
@stop