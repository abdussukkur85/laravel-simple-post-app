<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <title>@yield('title')</title>
    <style>
        body{
            background-color: #EAEFF4;
        }
        button.submit_btn {
          border: none;
          background: none;
          font-weight: 700;
          color: rgba(0,0,0,.5);
          vertical-align: middle;
          margin-top: 7px;
      }
      
    </style>
    @stack('css')
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pl-3 pr-3" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active font-weight-bold" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link font-weight-bold" href="">Dashboard</a>
                <a class="nav-link font-weight-bold" href="">Post</a>
              </div>
              <div class="navbar-nav align-self-end ml-auto">
                  <a class="nav-link font-weight-bold" href="#">Alex</a>
                  <form action="" method="post">
                    @csrf
                    <button class="submit_btn" type="submit">Logout</button>
                  </form>
                  
                  <a class="nav-link font-weight-bold" href="{{ route('register') }}">Register</a>
                  <a class="nav-link font-weight-bold" href="">Login</a>
                  
              </div>
            </div>
          </nav>
    </header>
    
    @yield('content')

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>