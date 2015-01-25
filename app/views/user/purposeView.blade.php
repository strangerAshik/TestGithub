
@extends('layouts.user.userLayout')
@section('content')
Main Way is {{$way}}<br/>

	@foreach($purposes as $purpose)
	
		@if($purpose->type==$way)
			<a href="{{$way}}/{{$purpose->id}}">{{$purpose->purpose}}</a>
		@endif
	
		
	@endforeach

@stop