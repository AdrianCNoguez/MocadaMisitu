<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('logo/Logo MisituMocada2.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    @yield('browser')
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.1-web/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">
    <script src="{{ asset('OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js') }}"></script>
    <title>Distribuidora Moncada - Misitu</title>

</head>
<body class="sc d-flex flex-column h-100" >

    <a href="https://api.whatsapp.com/send?phone=+525526506601&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <div class="container-fluid bg-black">
        <div class="row">
          <div class="col-12 p-0 m-0">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <img src="{{ asset('img/logo/fondo.png') }}" width="60px" alt="" class="d-none d-lg-block fondo my-2">
                <img src="{{ asset('img/logo/aro-verde.png') }}" width="70px" alt="" class="d-none d-lg-block aros my-2" id="aroG">
                <img src="{{ asset('img/logo/aro-azul.png') }}" width="70px" alt="" class="d-none d-lg-block aros my2" id="aroB">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" id="menu"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Inicio</a>
                  </li>
                  <li class="nav-item dropdown menu-area">
                    <a class="nav-link dropdown-toggle" href="#" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categorias
                    </a>
                    <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                      <div class="row">
                        <div class="col-sm-5 col-lg-auto bdr">
                          <h4>Iluminación</h4>
                            <h5>Iluminación interior</h5>
                            <a href="#" class="dropdown-item ml-2">Focos</a>
                            <a href="#" class="dropdown-item ml-2">Lamparas de escritorio</a>
                            <a href="#" class="dropdown-item ml-2">Lamparas de techo</a>
                            <a href="#" class="dropdown-item ml-2">Mangueras</a>
                            <a href="#" class="dropdown-item ml-2">Regletas</a>
                            <a href="#" class="dropdown-item ml-2">Series</a>
                            <a href="#" class="dropdown-item ml-2">Selfie light</a>
                            <a href="#" class="dropdown-item ml-2">Tiras Led</a>
                            <a href="#" class="dropdown-item ml-2">Vintage</a>
                            <h5>Iluminación exterior</h5>
                            <a href="#" class="dropdown-item ml-2">Reflectores</a>
                            <a href="#" class="dropdown-item ml-2">Lamparas</a>
                            <a href="#" class="dropdown-item ml-2">Faroles</a>
                            <a href="#" class="dropdown-item ml-2">Tiras led</a>
                            <a href="#" class="dropdown-item ml-2">Jardin</a>
                        </div>

                        <div class="col-sm-5 col-lg-auto bdr">
                            <h4>Electronica</h4>
                            <a href="{{route('ventiladores')}}" class="dropdown-item ml-2">Ventiladores</a>
                            <a href="{{route('timbres')}}" class="dropdown-item ml-2">Timbres</a>
                            <a href="#" class="dropdown-item ml-2">Bocina</a>
                            <h4>Componentes Electricos</h4>
                            <a href="" class="dropdown-item ml-2">Extenciones</a>
                            <a href="#" class="dropdown-item ml-2">Contactos</a>
                            <a href="#" class="dropdown-item ml-2">Soquets</a>
                            <a href="#" class="dropdown-item ml-2">Cable</a>
                            <h4>Entretnimiento</h4>
                            <a href="#" class="dropdown-item ml-2">Consolas</a>
                            <a href="#" class="dropdown-item ml-2">Juguetes</a>
                        </div>
                        <div class="col-sm-5 col-lg-auto">
                          <h4>Decoracion para el hogar</h4>
                          <a href="#" class="dropdown-item ml-2">Herrajes</a>
                          <a href="#" class="dropdown-item ml-2">Proyectores</a>
                          <a href="#" class="dropdown-item ml-2">Espejos</a>
                          <a href="#" class="dropdown-item ml-2">Macetas</a>
                          <h4>Difusores</h4>
                          <a href="#" class="dropdown-item ml-2">Humificador</a>
                          <h4>Cocina</h4>
                          <a href="#" class="dropdown-item ml-2">Dispensadores</a>
                        </div>
                        <div class="col-sm-5 col-lg-auto">

                          </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                  </li>
              </div>
            </nav>
          </div>
        </div>
    </div>



    <div class="jumbotron mb-1 p-0 bg-jm d-block d-lg-none">
        <div class="container m-0 p-0">
          <img src="{{ asset('img/logo/fondo.png') }}" width="200px" class=" fondo" alt="">
          <img src="{{ asset('img/logo/aro-verde.png') }}" width="200px" class="img-fluid aros" alt="" id="arosmobilG">
          <img src="{{ asset('img/logo/aro-azul.png') }}" width="200px" class="img-fluid aros" alt="" id="arosmobilB">
        </div>
    </div>

    <div class="space d-block d-lg-none"></div>

    @yield('content')


    <!--Footer-->
    <footer class="footer mt-auto py-3 green">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-5 col-lg-4 text-white">
                    <ul >
                        <li >Cras justo odio</li>
                        <li >Dapibus ac facilisis in</li>
                        <li >Morbi leo risus</li>
                        <li >Porta ac consectetur ac</li>
                        <li >Vestibulum at eros</li>
                      </ul>
                </div>

                <div class="col-12 col-sm-5 col-lg-4 text-white">
                    <ul >
                        <li >Cras justo odio</li>
                        <li >Dapibus ac facilisis in</li>
                        <li >Morbi leo risus</li>
                        <li >Porta ac consectetur ac</li>
                        <li >Vestibulum at eros</li>
                      </ul>
                </div>

                <div class="col-12 col-sm-5 col-lg-4 text-white">
                    <ul >
                        <li >Cras justo odio</li>
                        <li >Dapibus ac facilisis in</li>
                        <li >Morbi leo risus</li>
                        <li >Porta ac consectetur ac</li>
                        <li >Vestibulum at eros</li>
                      </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/efects.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="{{ asset('js/jquery-rotate.js') }}"></script>




</body>
</html>
