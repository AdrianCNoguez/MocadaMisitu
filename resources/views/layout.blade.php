<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('logo/Logo MisituMocada2.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    @yield('browser')
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.1-web/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet">
    <script src="{{ asset('OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js') }}"></script>
    <title>Distribuidora Moncada - Misitu</title>

    <style>
  

    </style>

</head>
<body class="sc d-flex flex-column h-100" >

    <a href="https://api.whatsapp.com/send?phone=+525526506601&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>

    <div class="container-fluid bg-black">
        <div class="row">

          <div class="col-12 p-0 m-0">
        
            <nav class="navbar navbar-expand-lg navbar-dark">
            
           <!-- <a href="https://listado.mercadolibre.com.mx/_CustId_23848430" class="btn ML-head  "></a> -->
           
           <!--PruebaBtnMercado-->
           <a href="https://listado.mercadolibre.com.mx/_CustId_433371236" class="boton-ML yellow short radius">
           <div class="ML-head"></div>
            </a>
              <!----> 
                       

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
                            <a href="{{ url('/iluminacionInterior/focos') }}" class="dropdown-item ml-2">Focos</a>
                            <a href="{{ url('/iluminacionInterior/lamparasescritorios') }}" class="dropdown-item ml-2">Lamparas de escritorio</a>
                            <a href="{{ url('/iluminacionInterior/lamparas') }}" class="dropdown-item ml-2">Lamparas de techo</a>
                            <!--<a href="{{ url('/iluminacionInterior/lamparaspared') }}" class="dropdown-item ml-2">Lamparas de pared</a>-->
                            <a href="{{ url('/iluminacionInterior/manguerasled') }}" class="dropdown-item ml-2">Mangueras</a>
                            <a href="{{ url('/iluminacionInterior/regletas') }}" class="dropdown-item ml-2">Regletas</a>
                            <a href="{{ url('/iluminacionInterior/series') }}" class="dropdown-item ml-2">Series</a>
                            <a href="{{ url('/iluminacionInterior/aros') }}" class="dropdown-item ml-2">Selfie light</a>
                            <a href="{{ url('/iluminacionInterior/tirasLed') }}" class="dropdown-item ml-2">Tiras Led</a>
                            <a href="#" class="dropdown-item ml-2">Vintage</a>

                            <h5>Iluminación exterior</h5>
                            <a href="{{ url('exterior/reflectores') }}" class="dropdown-item ml-2">Reflectores</a>
                            <a href="{{ url('exterior/lamparas') }}" class="dropdown-item ml-2">Lamparas</a>
                            <a href="{{ url('exterior/faroles') }}" class="dropdown-item ml-2">Faroles</a>
                           <!-- <a href="{{ url('exterior/tirasLed') }}" class="dropdown-item ml-2">Tiras led</a> -->
                            <a href="{{ url('exterior/estacas') }}" class="dropdown-item ml-2">Jardín</a>
                        </div>

                        <div class="col-sm-5 col-lg-auto bdr">
                            <h4>Electrónica</h4>
                            <a href="{{route('ventiladores')}}" class="dropdown-item ml-2">Ventiladores</a>
                            <a href="{{route('timbres')}}" class="dropdown-item ml-2">Timbres</a>
                            <a href="{{route('bocinas')}}" class="dropdown-item ml-2">Bocina</a>

                            <h4>Componentes Electricos</h4>                            
                            <a href="{{ route('extenciones') }}" class="dropdown-item ml-2">Extenciones</a>
                            <a href="{{ route('contactos') }}" class="dropdown-item ml-2">Contactos</a>             
                            <a href="{{ route('soquets') }}" class="dropdown-item ml-2">Soquets</a>                            
                            <a href="{{ route('cables') }}" class="dropdown-item ml-2">Cable</a>
                            <h4>Entretenimiento</h4>                            
                            <a href="{{ route('consolas') }}" class="dropdown-item ml-2">Consolas</a>
                           <!--<a href="#" class="dropdown-item ml-2">Juguetes</a>-->
                        </div>
                        <div class="col-sm-5 col-lg-auto">
                          <h4>Decoración para el hogar</h4>
                          <a href="{{ route('herrajes') }}" class="dropdown-item ml-2">Herrajes</a>                         
                          <a href="{{ route('proyectores')}}" class="dropdown-item ml-2">Proyectores</a>
                          <a href="{{ route('espejos')}}" class="dropdown-item ml-2">Espejos</a>
                          <a href="{{ route('macetas')}}" class="dropdown-item ml-2">Macetas</a>
                          <h4>Difusores</h4>                          
                          <a href="{{ route('humificadores')}}" class="dropdown-item ml-2">Humificador</a>
                          <h4>Cocina</h4>                         
                          <a href="{{ route('dispensadores')}}" class="dropdown-item ml-2">Dispensadores</a>
                          <h4>Otros</h4>                         
                          <a href="{{ route('joyas')}}" class="dropdown-item ml-2">Aretes&Collares</a>
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
    <footer class="footer mt-5 py-3 green ">
        <div class="container">
        <div class="row justify-content-between">
                <div class="col text-white">
                <ul >
                        <h2>¿Dónde nos ubicamos?</h2>
                        <li >Av. José del Pilar León 27, Juárez Pantitlan,</li>
                        <li> 57460 Nezahualcóyotl, Méx.</li>
                        
                      </ul>
                </div>
                <div class="col text-center">
                <img src="{{ asset('img/logo/logoFooterRedon.png') }}" class="rounded" alt="Misitu" width="250" >
                </div>




                <!--Btnfooter--->
                <div class="col-sm text-center"> 
                <a href="https://listado.mercadolibre.com.mx/_CustId_23848430" class="botonML-FT yellow radius">
                <div class="ML-footer"></div>
            </a>
              </div>
              
            




                <div class="col text-white">
                  <br>
                <ul >
                       <h1>Web MoMi</h1>
                        <li >DISTRIBUIDORA MONCADA & MISITU</li>
                        <li >Copyright © 2020 Web Momi</li>
                        <li >Todos los derechos reservados.</li>     

                      </ul> 
                </div>
            </div>
        </div>
        <br> 
        <!--Inicio-->
        <div class="container-fluid">
            <div class="d-flex justify-content-around bg-success mb-3">
              
              <!--ModalContacto-->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Contact">
                Contacto
              </button>
              <div class="modal fade" id="Contact" tabindex="-1" role="dialog" aria-labelledby="Contact" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title col-11 text-center" id="Contact">Contacto</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <ul >          
                      <li >+52 1 55 5072 4953</li>
                      <li>+52 55 6896 2105</li>
                      <li >E-mail:_________</li>
                    </ul> 
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div> 
              <!--Fin_ModalContacto-->


              <!--Inicio_ModalAbout-->
              <!-- Button_modalAbout -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#About">
                Acerca de Nosotros
              </button>
              <!--Fin btnModalAbout-->
              <div class="modal fade" id="About" tabindex="-1" role="dialog" aria-labelledby="About" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title col-11 text-center" id="About">MoncadaMisitu</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p>Somos una distribuida de artículos de Iluminación, Electrónica, Jardín, Ropa, Cocina, Componentes eléctricos y más…. </p>  
                  <p>Estamos para satisfacer las necesidades de nuestros clientes, nuestra intención es brindar mercancía de calidad, ofreciendo una agradable experiencia de compra. ¡Cada uno de nuestros clientes son importantes para nosotros!</p>
                  <p>Nuestra calidad es garantizada ya que todos nuestros productos pasan por un control de calidad para cerciorarnos de que nuestro cliente quede satisfecho con su compra.</p>
                    </div>
                    <div class="modal-footer">
                    </div>
                  </div>
                </div>
              </div> 
              <!--Fin_ModalAbout-->
            
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
              FAQ´S
            </button>
          <!--Fin btn modal-->
            <!-- The Modal -->
            <div class="modal" id="myModal" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title col-11 text-center">FAQ´S</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <h5>Preguntas Frecuentres..</h5>
                    <p>P1: ¿Dónde puedo recoger los artículos que compre a través del sitio web Web MoMi? </p>
                    <p> R: Los artículos o articulo que ha comprado los puede recoger en  ___</p>
                    
                  <p>P2: ¿Cuánto tiempo tengo que esperar por los artículos después del pago?</p>
                  <p>R: El tiempo de espera es de _____</p>
                  
                  <p>P3: Si un artículo está en promoción en su tienda física, ¿Esta promoción se extiende a su sitio web? </p>
                  <p>R:</p>
                  
                  <p>P4: ¿Tiene una sección de comentarios en su sitio web?</p>
                  <p>R: Sí, Puede utilizar el icono de WhatsApp para poder resolverle cualquier duda que tenga de algún artículo o precio.</p>
                  
                  <p>P5: ¿Existe un número de línea directa?</p>
                  <p>R: El cliente puede llamar a _____ para sus preguntas y consultas.</p>

                  <p>P6: Si un producto no esta en stock ¿Qué es lo que puedo hacer?</p>
                  <p>R: Puedes preguntar haciendo click en el icono de WhatsApp si el producto esta disponible o cuando estará disponible</p>
                  
                  <h3>Sobre los pedidos...</h3>
                    <p>P1:¿Cómo puedo realizar un pedido?</p>
                    <p>R: Para realizar un pedido puede utilizar el icono de WhatssApp para realizar su pedido</p>
                    
                    <p>P2: ¿Qué método de pago se acepta para pedidos online?</p>
                    <p>R:</p>

                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- Fin_Modal_Scroll -->
          </div>
        <!---->
            </div>

 
    <br><br><br>
    </footer>

    <script src="{{ asset('js/efects.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="{{ asset('js/jquery-rotate.js') }}"></script>




</body>
</html>
