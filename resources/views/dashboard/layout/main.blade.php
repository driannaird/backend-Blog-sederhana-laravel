<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="css/dashboard.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    {{-- trik editor --}}
    <link rel="stylesheet" href="/css/trix.css" type="text/css">
    <script src="/js/trix.js" type="text/javascript"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
      }
    </style>

  </head>
  <body>
    
    @include('dashboard.layout.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layout.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('container')
    </main>
  </div>
</div>


      <script src="{{ asset('bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js') }}"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
      <script src="js/dashboard.js"></script>
  </body>
</html>
