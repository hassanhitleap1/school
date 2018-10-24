<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from swlabs.co/educef/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 20:40:02 GMT -->
<head>
    <title>Educef 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    @include('layouts.head')
  </head>
  <body class="home02">
    
    @include('layouts.header')

    @include('auth.dialog_auth')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.js')

    <div class="positionfixed"></div>
  </body>

<!-- Mirrored from swlabs.co/educef/html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 20:41:58 GMT -->
</html>