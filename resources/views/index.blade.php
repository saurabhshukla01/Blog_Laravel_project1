<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>@yield('title')</title>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
    @section('header')
        <div class="jumbotron text-center" style="margin-bottom:0">
          <h1>This Is Top header Blog</h1>
          <p>Resize this responsive page to see the effect!</p>
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <a class="navbar-brand" href="#">BlogView</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">welcome</a>
              </li>
            </ul>
          </div>
        </nav>
    @show

    <div class="container" style="margin-top:30px">
        @yield('content')
    </div>

    @section('footer')
        <div class="jumbotron text-center" style="margin-bottom:0">
          <p>@copyright in Viewblog data</p>
        </div>
    @show

</body>
</html>
