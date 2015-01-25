<!-- Stored in app/views/layouts/master.blade.php -->

<html>
    <body>
        @yield('sidebar')

        <div class="container">
            @yield('content')
           
        </div>
		 @include('footer')
		 @yield('footer')
    </body>
</html>