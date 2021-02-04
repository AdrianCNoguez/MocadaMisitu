@extends('layout')
@section('browser')
    <style>
        img{
            max-width: 100%;
            height: auto;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/browser-product.css') }}">
@endsection

@section('content')

    <div class="container">
        @section('breadcrumbs')
            <li class="breadcrumb-item text-white ctive" aria-current="page">Iluminacion Interior</li>
            <li class="breadcrumb-item text-white active" aria-current="page">Regletas</li>
        @endsection
        @include('layouts.nav-pages')

    

    <div class="card mb-3">
        <div class="row no-gutters align-items-center">
            <div class="col-12 col-md-5">
                <img id="imageBox" src="{{ asset('img/'.$imagenes->first()['ruta'] ) }}" alt="{{ $imagenes->first() }}" class="img-fluid first-img">
                <div class="row p-2 justify-content-center">
                    @foreach ($imagenes as $img)
                        <div class="col-3" id="img-mini">
                            <img src="{{ asset('img/'.$img->ruta) }}" alt="" class="img-fluid mini-img">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-7">
                <div class="card-body">
                      <h3 class="title-product">{{ $product->nombre }}</h3>
                      <p class="card-text text-justify">{{ $product->descripcion }}</p>
                      <h5 class="card-title">Características</h5>
                      <ul>
                          <li>Marca: {{ $product->marca }}</li>
                          <li>Modelo: {{ $product->modelo }}</li>
                          <li>Longitud: {{ $product->Largo }}</li>
                          <li>Tipo de Led: {{ $product->tipoLed }}</li>
                          <li>Potencia: {{ $product->potencia }} </li>
                     </ul>
                     <a href="{{ url('iluminacionInterior/regletas') }}" class="btn btn-dark mb-3"><i class="fa fa-lightbulb"></i> Volver</a>
                </div>
            </div> 
        </div>
    </div>

    </div>

    <script>
        
    </script>
@endsection
