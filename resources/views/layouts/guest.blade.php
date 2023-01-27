<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {<script src="{{ asset('js/app.js') }}"></script>
       {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} 
    </head>
    <body>
        
             <!--header container-->
    <nav id="header"  style="background-color:black;color:white;padding:2px;">
        <div id="header-container" >
            <div id="left-container">
            <div class="dropdown">
    <button class="dropbtn" style="color:white">Forest Cookers
      <i class="fa fa-home"></i>
    </button></div>
                <!--<a id="company-logo">company logo</a>-->
            </div>
           
                <!--<a href="cart.php">cart</a>-->
            </div> 
        </div>
    </div> 
</div>
</nav>
            {{ $slot }}
    </body>
</html>
