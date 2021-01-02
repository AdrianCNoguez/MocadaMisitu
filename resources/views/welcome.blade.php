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
                    <h5>Web Develoment</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed
                        ullam in quo, recusandae deleniti</p>
                    <p><a href="">More info</a></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/Slider/2.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption">
                    <h5>Web Designe</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed
                        ullam in quo, recusandae deleniti</p>
                    <p><a href="">More info</a></p>
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
                        <a href="">
                            <img src="{{ asset('img/'.$item->first()['ruta'] ) }}" alt="img" width="50%" class="card-img-top flip">
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

            <div class="col-12 col-sm-4 col-md-4 col-lg-3 text-white text-center">
                <ul class="p-0">
                    <li class="mb-4">
                        <svg class="d-none d-md-block d-lg-inline" width="50px" viewBox="0 0 16 16" class="bi bi-sun"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z" />
                            <path fill-rule="evenodd"
                                d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-moon"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-sun"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z" />
                            <path fill-rule="evenodd"
                                d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-moon"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                </ul>
            </div>

            <div class="col-12  col-sm-4 col-md-4 col-lg-3 text-white text-center">
                <ul class="p-0">
                    <li class="mb-4">
                        <svg class="d-none d-md-block d-lg-inline" width="50px" viewBox="0 0 16 16" class="bi bi-sun"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z" />
                            <path fill-rule="evenodd"
                                d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-moon"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-sun"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z" />
                            <path fill-rule="evenodd"
                                d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-moon"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                </ul>
            </div>

            <div class="col-12  col-sm-4 col-md-4 col-lg-3 text-white text-center">
                <ul class="p-0">
                    <li class="mb-4">
                        <svg class="d-none d-md-block d-lg-inline" width="50px" viewBox="0 0 16 16" class="bi bi-sun"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z" />
                            <path fill-rule="evenodd"
                                d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-moon"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-sun"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.5 8a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0z" />
                            <path fill-rule="evenodd"
                                d="M8.202.28a.25.25 0 0 0-.404 0l-.91 1.255a.25.25 0 0 1-.334.067L5.232.79a.25.25 0 0 0-.374.155l-.36 1.508a.25.25 0 0 1-.282.19l-1.532-.245a.25.25 0 0 0-.286.286l.244 1.532a.25.25 0 0 1-.189.282l-1.509.36a.25.25 0 0 0-.154.374l.812 1.322a.25.25 0 0 1-.067.333l-1.256.91a.25.25 0 0 0 0 .405l1.256.91a.25.25 0 0 1 .067.334L.79 10.768a.25.25 0 0 0 .154.374l1.51.36a.25.25 0 0 1 .188.282l-.244 1.532a.25.25 0 0 0 .286.286l1.532-.244a.25.25 0 0 1 .282.189l.36 1.508a.25.25 0 0 0 .374.155l1.322-.812a.25.25 0 0 1 .333.067l.91 1.256a.25.25 0 0 0 .405 0l.91-1.256a.25.25 0 0 1 .334-.067l1.322.812a.25.25 0 0 0 .374-.155l.36-1.508a.25.25 0 0 1 .282-.19l1.532.245a.25.25 0 0 0 .286-.286l-.244-1.532a.25.25 0 0 1 .189-.282l1.508-.36a.25.25 0 0 0 .155-.374l-.812-1.322a.25.25 0 0 1 .067-.333l1.256-.91a.25.25 0 0 0 0-.405l-1.256-.91a.25.25 0 0 1-.067-.334l.812-1.322a.25.25 0 0 0-.155-.374l-1.508-.36a.25.25 0 0 1-.19-.282l.245-1.532a.25.25 0 0 0-.286-.286l-1.532.244a.25.25 0 0 1-.282-.189l-.36-1.508a.25.25 0 0 0-.374-.155l-1.322.812a.25.25 0 0 1-.333-.067L8.203.28zM8 2.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
                    </li>
                    <li class="mb-4">
                        <svg width="50px" class="d-none d-md-block  d-lg-inline" viewBox="0 0 16 16" class="bi bi-moon"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z" />
                        </svg>
                        <h5 class="d-inline"><a href="">Lamparas solares</a></h5>
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
                <h5>Los más vendidos</h5>
            </div>
        </div>
    </div>

    <div class="container mt-0">
        <div class="row justify-content-center">
            <div class="owl-carousel owl-theme col-11 col-lg-12 mb-0">


                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                        <a href="">
                            <img src="{{ asset('img/images/A1.png') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Adorable Lampara Hongo Led Multicolor</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                        <a href="">
                            <img src="{{ asset('img/images/A2.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Adorable Lampara Hongo Led Multicolor</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                        <a href="">
                            <img src="{{ asset('img/images/A3.png') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Adorable Lampara Hongo Led Multicolor</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                        <a href="">
                            <img src="{{ asset('img/images/A1.png') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Adorable Lampara Hongo Led Multicolor</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                        <a href="">
                            <img src="{{ asset('img/images/A2.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Adorable Lampara Hongo Led Multicolor</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                        <a href="">
                            <img src="{{ asset('img/images/A2.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Adorable Lampara Hongo Led Multicolor</p>
                        </div>
                    </div>
                </div>

                <div class="item ">
                    <div class="card border-0 rounded-lg ">
                        <a href="">
                            <img src="{{ asset('img/images/A2.jpg') }}" alt="img" width="50%" class="card-img-top flip">
                        </a>
                        <div class="card-body pl-2 pr-2 text-center">
                            <p class="card-title font-weight-bold">Adorable Lampara Hongo Led Multicolor</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- FIN -->
@endsection
