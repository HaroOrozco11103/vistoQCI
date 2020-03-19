<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VistoQCI</title>
    <!-- Favicon -->
    <link href="{{ asset('argon/assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
</head>

<style>
  div.c0
  {
    font-family: 'Indie Flower', cursive;
    font-size: 60px;
    color: black;
    text-shadow: 2px 0 0 #ffffff, -2px 0 0 #ffffff, 0 2px 0 #ffffff, 0 -2px 0 #ffffff, 1px 1px #ffffff, -1px -1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff;
  }
  div.c1 { background-color: black;}
  div.c2 { background-color: yellow; color: yellow; }
  div.c3 { background-color: red; color: red; }
  ul.c { background-color: white; border-radius: 5px; }
</style>

<body background="{{ asset('argon/assets/img/brand/bg.jpg') }}">
    <!-- Main content -->
    <div class="main-content">
    <div align="right" class="c1">.</div>
    <div align="right" class="c2">.</div>
    <div align="right" class="c3">.</div>
      <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
          <div class="container-fluid">
              <div class="form-group mb-0"></div> <!-- Desplaza el boton de volver hacia la derecha -->
              <!-- Volver -->
              <ul class="navbar-nav align-items-center d-none d-md-flex c">
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" style="color:black;" class="nav-link dropdown-toggle" href="#" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          VistoQCI <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('inicio') }}">
                              Volver
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>
      <div align="center" class="c0">Visto en CUCEI</div>

      <div class="container-fluid mt--5">
            <main class="py-5">
                <div class="container">
                    <div class="row justify-content-center pt-5">
                        <div class="col-0">
                            <!-- Messages -->
                            @include('partials.mensajes')
                            <!-- Content -->
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>
    <!-- Argon JS -->
    <script src="{{ asset('argon/assets/js/argon.js?v=1.0.0') }}"></script>
</body>

</html>
