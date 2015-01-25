<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>BinaryAccounting</title>
 <!--<link rel="stylesheet" href="{{asset('bootstrap-3.0.0.min.
css')}}">-->
<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}" />
 </head>
 <body>
 <div class="container">
	 <div id="header">
		@include('header')
		@yield('userHeader')
	 </div>
	 @if(Session::has('message'))
	 <div class="alert alert-success">
	 {{Session::get('message')}}
	 </div>
	 @endif
		<div class='content' style='margin-top:30px;'>
		@yield('content')
		</div>
		<div class='footer' style='margin-top:30px;' >
		 @include('footer')
		 @yield('userFooter')
		 </div>
	 
 </div>
 </body>
</html>