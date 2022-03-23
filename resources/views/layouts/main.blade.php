<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title')</title>

      <!--Fonte-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

      
      <!--CSS da aplicação-->
      <link href="{{asset ('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset ('css/style.css')}}" rel="stylesheet">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="{{ asset('img/logo_novacap.png')}}" alt="" width="200" height="">
                </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Demandas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Atividades</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Teste</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        
      
      
      {{-- content --}}
      @yield('content')

      <script src="{{ asset('js/jquery.min.js') }}"></script>    
      <script src="{{asset ('js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('js/popper.min.js')}}"></script>
      


  </body>
</html>