<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('/images/favicon.png') }}" />

<!-- 
Essential stylesheets
=====================================-->
<link rel="stylesheet" href="{{ url('plugins/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/icofont/icofont.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick.css') }}">
<link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('styles.css') }}">
      <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
  </head>
  <body>
    <div>
        @yield('content')
    </div>
    @auth
    <div class="nav-item dropdown">
      <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('#') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
    </div>                            
    @endauth
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>