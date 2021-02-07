@extends('layout')

@section('browser')
    <link rel="stylesheet" href="{{ asset('css/browser.css') }}">
@endsection

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/Slider/1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Web MoMi</h5>
                    <p>Agregar Texto de Ofertas</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/Slider/2.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption">
                    <h5>Web Momi</h5>
                    <p>Agregar Texto de Ofertas</p>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.browser')

    <!-- LO MAS VENDIDO -->
    <div class="container mt-0">
        <div class="row mb-0">
            <div class="col-md-12 text-center text-white pt-3">
                <h3>Los más vendidos</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="owl-carousel owl-theme col-11 col-lg-12 mb-0">
               @foreach ($productos as $item)
                <div class="item">
                    <div class="card border-0 rounded-lg">
                        <a href="{{ route('lomasvendido')}}">
                            <img src="{{ asset('img/'.$item->first()['ruta'] ) }}" alt="img" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">{{ $item->first()['nombre'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- FIN -->

    <!-- CATEGORIAS -->
    <div class="container-fluid mt-5 categorias">
        <div class="row bg-primary justify-content-center justify-content-lg-around categories">
            <div class="col-12 text-center text-white p-3">
                <h3>Nuestras categorías</h3>
            </div>

            <div class="col-12 col-sm-4 col-md-4 col-lg-3 text-white text-left">
                <ul class="p-0">
                    <li class="mb-4">
                        <svg class="d-none d-md-block d-lg-inline" width="50px" viewBox="0 0 16 16" class="bi bi-lightbulb"
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                            <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
                            </svg>                        </svg>
                        <h5 class="d-inline"><a href="{{ url('/iluminacionInterior/focos') }}" >Focos</a></h5>
                        
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-distribute-horizontal"
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-distribute-horizontal" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5zm-13 0a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
                                <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10z"/>
                                </svg>
                        </svg>
                        <h5 class="d-inline"><a href="{{ url('/iluminacionInterior/regletas') }}">Regletas</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-square-fill"
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-square-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z"/>
                            </svg>                     
                        </svg>
                        <h5 class="d-inline"><a href="{{ url('exterior/reflectores') }}">Reflectores</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-border-width"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" fill="currentColor" class="bi bi-border-width" viewBox="0 0 16 16">
                            <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </svg>
                        <h5 class="d-inline"><a href="{{ url('/iluminacionInterior/tirasLed') }}">Tiras Led</a></h5>
                    </li>
                </ul>
            </div>

            <div class="col-12  col-sm-4 col-md-4 col-lg-3 text-white text-left">
                <ul class="p-0">
                    <li class="mb-4">
                        <svg class="d-none d-md-block d-lg-inline" width="50px" viewBox="0 0 16 16" class="bi bi-bullseye"
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="45" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                            <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </svg>
                        <h5 class="d-inline"><a href="{{route('ventiladores')}}">Ventiladores</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-speaker-fill"
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-speaker-fill" viewBox="0 0 16 16">
                            <path d="M9 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-2.5 6.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0z"/>
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm6 4a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 7a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7z"/>
                            </svg>                        </svg>
                        <h5 class="d-inline"><a href="{{route('bocinas')}}">Bocinas</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-outlet"
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="47" fill="currentColor" class="bi bi-outlet" viewBox="0 0 16 16">
                            <path d="M3.34 2.994c.275-.338.68-.494 1.074-.494h7.172c.393 0 .798.156 1.074.494.578.708 1.84 2.534 1.84 5.006 0 2.472-1.262 4.297-1.84 5.006-.276.338-.68.494-1.074.494H4.414c-.394 0-.799-.156-1.074-.494C2.762 12.297 1.5 10.472 1.5 8c0-2.472 1.262-4.297 1.84-5.006zm1.074.506a.376.376 0 0 0-.299.126C3.599 4.259 2.5 5.863 2.5 8c0 2.137 1.099 3.74 1.615 4.374.06.073.163.126.3.126h7.17c.137 0 .24-.053.3-.126.516-.633 1.615-2.237 1.615-4.374 0-2.137-1.099-3.74-1.615-4.374a.376.376 0 0 0-.3-.126h-7.17z"/>
                            <path d="M6 5.5a.5.5 0 0 1 .5.5v1.5a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v1.5a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zM7 10v1h2v-1a1 1 0 0 0-2 0z"/>
                            </svg>                        </svg>
                        <h5 class="d-inline"><a href="{{ route('contactos') }}">Contactos</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-lightbulb-fill"
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="42" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                            <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
                            </svg>                       
                             </svg>
                        <h5 class="d-inline"><a href="{{ route('soquets') }}">Soquets</a></h5>
                    </li>
                </ul>
            </div>

            <div class="col-12  col-sm-4 col-md-4 col-lg-3 text-white text-left">
                <ul class="p-0">
                    <li class="mb-4">
                        <svg class="d-none d-md-block d-lg-inline" width="50px" viewBox="0 0 16 16" class="bi bi-joystick"
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="45" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                            <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                            <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                            </svg>
                        </svg>
                        <h5 class="d-inline"><a href="{{ route('consolas') }}">Consolas</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-circle-square"
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                            <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
                            <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
                            </svg>
                        </svg>
                        <h5 class="d-inline"><a href="{{ route('herrajes') }}">Herrajes</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-sun"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z" />
                            <path fill-rule="evenodd"
                                d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
                        </svg>
                        <h5 class="d-inline"><a href="{{ route('proyectores')}}">Proyectores</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-bezier"
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="45" fill="currentColor" class="bi bi-bezier" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"/>
                            </svg>
                        </svg>
                        <h5 class="d-inline"><a href="{{ route('humificadores')}}">Humificadores</a></h5>
                    </li>
                </ul>
            </div>

            
        </div>
    </div>
    <!-- FIN -->


    <!-- ARTICULOS -->
    <div class="container-fluid mt-5">
        <div class="row mb-0">
            <div class="col-md-12 text-center text-white p-0">
                <h5>Recomendados</h5>
            </div>
        </div>
    </div>

    <div class="container mt-0">
        <div class="row justify-content-center">
            <div class="owl-carousel owl-theme col-11 col-lg-12 mb-0">


                <div class="item ">
                    <div class="card border-0 rounded-lg ">

                        <a href="{{ route('productos')}}">
                            <img src="{{ asset('img/images/Libro1.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Mini Libros Collar</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                    <a href="{{ route('productos')}}">
                            <img src="{{ asset('img/images/lupa20w1.png') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Reflector 20w para interperie</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                    <a href="{{ route('productos')}}">
                            <img src="{{ asset('img/images/3528rgb11.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Tira RGB 5m 3528</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                    <a href="{{ route('productos')}}">
                            <img src="{{ asset('img/images/aretes1.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Mini Libros Aretes</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                    <a href="{{ route('productos')}}">
                            <img src="{{ asset('img/images/buro2.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Lampara de Buro</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                    <a href="{{ route('productos')}}">
                            <img src="{{ asset('img/images/proyectorEstrella1.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Proyectora de Estrellas</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                    <a href="{{ route('productos')}}">
                            <img src="{{ asset('img/images/bala20.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Foco Bala 20w</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FIN -->
@endsection
