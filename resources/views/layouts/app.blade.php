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
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    

       
       {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} 
    </head>
    <body class="font-sans antialiased">
        {{-- <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main> --}}

            <div class="sidenav">
                <div class="sidenav-header">
                <h1><img src="../assets/images/offers/offer2.jpg" alt="Forest">
                <span class="restaurant-name" style="padding-right:3px;">Cookers</span>
                </div>
                  <a href="#about">DASHBOARD</a>
                 
                  <button class="dropdown-btn">MENU
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a href="?action=add-menu">ADD MENU</a>
                    <a href="?action=manage-menu">MANAGE MENU</a>
                  </div>
                  <a href="#contact">ORDERLIST</a>
                  <a href="#contact">PROFILE</a>
                        <!-- Authentication -->
                       
                         <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                  logout
                         </a>
                        </form>
                  
               
                </div>
                <div class="main"> <div class="min-h-screen bg-gray-100">
        
                    <!-- Page Heading -->
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                  </div>
                <div style="padding-left:20px">
                  <h2 style="text-transform:capitalize;">{{-- <?php echo $pagetitle ?> --}}</h2>
                  <hr style="color:white;">
                </div>
                {{ $slot }}
        </div>
        <script src="{{ asset('js/admin.js') }}"></script> 
    </body>
</html>
