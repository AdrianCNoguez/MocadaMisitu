<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="logo/Logo MisituMocada2.png" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    @yield('browser')
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script>
    <title>Distribuidora Moncada - Misitu</title>

</head>
<body class="sc">

    <a href="https://api.whatsapp.com/send?phone=+525526506601&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <div class="container-fluid bg-black">
        <div class="row">
          <div class="col-12 p-0 m-0">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <img src="{{ asset('img/logo/logo.png') }}" width="150px" alt="" class="ml-5 d-none d-md-block">
              <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" id="menu"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                  </li>
                  <li class="nav-item dropdown menu-area">
                    <a class="nav-link dropdown-toggle" href="#" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categorias
                    </a>
                    <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                      <div class="row">
                        <div class="col-sm-5 col-lg-auto">
                          <h5>Iluminación</h5>
                          <a href="" class="dropdown-item ml-2">Focos</a>
                          <a href="#" class="dropdown-item ml-2">Reflectores</a>
                          <a href="#" class="dropdown-item ml-2">Lamparas</a>
                          <a href="#" class="dropdown-item ml-2">Herrajes</a>
                          <a href="#" class="dropdown-item ml-2">Tiras Led</a>
                          <a href="#" class="dropdown-item ml-2">Mangueras</a>
                          <a href="#" class="dropdown-item ml-2">Regletas</a>
                          <a href="#" class="dropdown-item ml-2">Faroles</a>
                          <a href="#" class="dropdown-item ml-2">Series</a>
                          <a href="#" class="dropdown-item ml-2">Fotografia</a>
                          <a href="#" class="dropdown-item ml-2">Paneles</a>
                          <a href="#" class="dropdown-item ml-2">Jardin</a>
                        </div>
                        <div class="col-sm-5 col-lg-auto">
                        <h5>Componentes Electricos</h5>
                          <a href="" class="dropdown-item ml-2">Extenciones</a>
                          <a href="#" class="dropdown-item ml-2">Contactos</a>
                          <a href="#" class="dropdown-item ml-2">Soquets</a>
                          <a href="#" class="dropdown-item ml-2">Cable</a>
                        </div>
                        <div class="col-sm-5 col-lg-auto">
                          <h5>Entretnimiento</h5>
                          <a href="#" class="dropdown-item ml-2">Consolas</a>
                          <a href="#" class="dropdown-item ml-2">Juguetes</a>
                          <h5>Decoracion para el hogar</h5>
                          <a href="#" class="dropdown-item">Proyectores</a>
                          <a href="#" class="dropdown-item">Espejos</a>
                          <a href="#" class="dropdown-item">Macetas</a>
                        </div>
                        <div class="col-sm-5 col-lg-auto">
                            <h5>Electronica</h5>
                            <a href="#" class="dropdown-item">Ventiladores</a>
                            <a href="#" class="dropdown-item">Timbres</a>
                            <a href="#" class="dropdown-item">Bocina</a>
                            <h5>Difusores</h5>
                            <a href="#" class="dropdown-item">Humificador</a>
                            <h5>Cocina</h5>
                            <a href="#" class="dropdown-item">Dispensadores</a>
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

    <div class="jumbotron mb-1 p-0 bg-jm d-block d-md-none">
        <div class="container my-4">
          <img src="{{ asset('img/logo/logo.png') }}" class="img-fluid" alt="">
        </div>
    </div>

    @yield('content')


    <!--Footer-->
    <footer class="footer mt-5 py-3 green">
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

    <script src="js/efects.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>



</body>
</html>
