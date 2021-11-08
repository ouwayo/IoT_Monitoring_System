<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- New charts stuff: -->
    
<!-- Styles for the  footer -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">





   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   @can('manage-users')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                       User Management
                                       
                                    </a>
                                   @endcan

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>



</body>
<footer>

<footer class="bg-dark text-white pt-5 pb-4">
   <div class="container text-center text-md-left">
     <div class="row text-center text-mode-left"> 
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Lake Kivu Monitoring Program</h5> 
         <p> Lake Kivu Monitoring Programme (LKMP) checks potential impacts of methane extraction 
         on Lake Kivu and its environment. 
         Monitoring exercise includes processing large amount of data measured with CTDs 
         instruments during monitoring campaigns carried out on the Lake.</p>

         </div>

    <div class="col-md-2 col-lg-3 col-xl-2 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Health Protocals</h5>
    <p>
      <a href="#" class="text-white" style="text-decoration:none;">WHO </a>
    </p> 
    <p>
      <a href="#" class="text-white" style="text-decoration:none;"> MoH </a>
    </p> 
    <p>
      <a href="#" class="text-white" style="text-decoration:none;">Contour Global </a>
    </p> 
    </div> 

    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
       <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Local Atmospheric Conditions</h5>
       <p>
      <a href="#" class="text-white" style="text-decoration:none;">Remote </a>
    </p> 
    <p>
      <a href="#" class="text-white" style="text-decoration:none;">Site </a>
    </p> 
    <p>
      <a href="#" class="text-white" style="text-decoration:none;">Careers </a>
    </p> 
    </div>   

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
    <p>
     <i class="fas fa-home mr-3"></i>Kigali, KG 123 St,Remera
    </p>

    <p>
     <i class="fas fa-envelope mr-3"></i>oscaruwayo@gmail.com
     </p>

     <p>
     <i class="fas fa-phone mr-3"></i>+250 788 896 895
     </p>

     <p>
     <i class="fas fa-print mr-3"></i>+250 555 880 10
     </p> 
     </div>
    <hr class="mb-2">
    <div class="mb-4">
    <div class="row align-items-center">
     <div class="col-md-4 col-lg-12 ">
       
      <p> Copyright ©2021 All rights reserved by:
       <a href="https://www.linkedin.com/in/oscar-uwayo/" style="text-decoration:none;">
         <strong class="text-warning">Oscar Uwayo😎</strong>
         </a>
         </p>
      </div>   

   

</footer> 
</html>
