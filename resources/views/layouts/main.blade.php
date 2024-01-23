<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CVWS-Application</title> <!-- Sebagai judul tab homepage -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


    @if(auth()->check() && auth()->user()->usertype == 1)  
        @include('partials.navbarproject')
    
    @elseif(auth()->check() && auth()->user()->usertype == 2)
        @include('partials.navbargeneral')
    
    
    @elseif(auth()->check() && auth()->user()->usertype == 3)
        @include('partials.navbarengineer')
    
    @elseif(auth()->check() && auth()->user()->usertype == 4)
        @include('partials.navbarcustomer')

    @else
        @include('partials.navbarguest')

    @endif

<br><br>

<style>
        body {
            background-image: url("{{ asset('picture/background.jpg') }}");
            /* Centang atau sesuaikan properti CSS lainnya sesuai kebutuhan */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Set tinggi sesuai kebutuhan */
            margin: 0; /* Hapus margin default */
        }

        /* ... Sesuaikan styling lainnya ... */
    </style>

<div class="container mx-auto text-center">
  @yield('container')
</div>

<div class="container ml-3">
    @yield('container2')
</div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>