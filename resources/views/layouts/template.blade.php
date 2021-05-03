
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Libreria</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Libreria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('utenti.index')}}">Utenti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('libri.index')}}">Libri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Prestiti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('autori.index')}}">Autori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('editori.index')}}">Editori</a>
              </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        
      </nav>
      <br>
    </header>
    <br>
    <br>
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
       @yield('content')
      </div>
    </div>
  </div>
  </body>
</html>
