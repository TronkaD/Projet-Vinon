<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>{{ env('APP_NAME')}}</title>

    <link rel="canonical" href="{{ url('https://getbootstrap.com/docs/5.2/examples/headers/') }}">

    

    

<link href="{{ url('/docs/5.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT') }}" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{ url('/docs/5.2/assets/img/favicons/apple-touch-icon.png') }}" sizes="180x180">
<link rel="icon" href="{{ url('/docs/5.2/assets/img/favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ url('/docs/5.2/assets/img/favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
<link rel="manifest" href="{{ url('/docs/5.2/assets/img/favicons/manifest.json') }}">
<link rel="mask-icon" href="{{ url('/docs/5.2/assets/img/favicons/safari-pinned-tab.svg') }}" color="#712cf9">
<link rel="icon" href="{{ url('/docs/5.2/assets/img/favicons/favicon.ico') }}">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ url('headers.css') }}" rel="stylesheet">
  </head>
  <body>
  <header class="py-3 mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
      <div class="dropdown">
        <a href="{{ url('#') }}" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="{{ url('#bootstrap') }}"/></svg>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item active" href="{{ url('#') }}" aria-current="page">Overview</a></li>
          <li><a class="dropdown-item" href="{{ url('#') }}">Inventory</a></li>
          <li><a class="dropdown-item" href="{{ url('#') }}">Customers</a></li>
          <li><a class="dropdown-item" href="{{ url('#') }}">Products</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{ url('#') }}">Reports</a></li>
          <li><a class="dropdown-item" href="{{ url('#') }}">Analytics</a></li>
        </ul>
      </div>

      <div class="d-flex align-items-center">
        <form class="w-100 me-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="flex-shrink-0 dropdown">
          <a href="{{ url('#') }}" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ url('https://github.com/mdo.png') }}" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="{{ url('#') }}">New project...</a></li>
            <li><a class="dropdown-item" href="{{ url('#') }}">Settings</a></li>
            <li><a class="dropdown-item" href="{{ url('#') }}">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('#') }}">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-light border rounded-3">
        <br><br><br><br><br><br><br><br><br><br>
      </div>
      <div class="bg-light border rounded-3">
        <br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="{{ url('#') }}" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ url('#') }}" class="nav-link link-dark px-2">Features</a></li>
        <li class="nav-item"><a href="{{ url('#') }}" class="nav-link link-dark px-2">Pricing</a></li>
        <li class="nav-item"><a href="{{ url('#') }}" class="nav-link link-dark px-2">FAQs</a></li>
        <li class="nav-item"><a href="{{ url('#') }}" class="nav-link link-dark px-2">About</a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="{{ url('#') }}" class="nav-link link-dark px-2">Login</a></li>
        <li class="nav-item"><a href="{{ url('#') }}" class="nav-link link-dark px-2">Sign up</a></li>
      </ul>
    </div>
  </nav>
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="{{ url('/')}}" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="{{ url('#bootstrap') }}"/></svg>
        <span class="fs-4">Double header</span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
  </header>

  <div class="b-example-divider"></div>

  <header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="{{ url('/') }}" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                Customers
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

  <div class="b-example-divider"></div>
</main>


    <script src="{{ url('/docs/5.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

      
  </body>
</html>
