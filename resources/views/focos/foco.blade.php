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
            <li class="breadcrumb-item text-white ctive" aria-current="page">Iluminación interior</li>
            <li class="breadcrumb-item text-white active" aria-current="page">Focos</li>
        @endsection
        @include('layouts.nav-pages')
 
            <div class="card mb-3">
             <!--Inserción-->
             <div class="row no-gutters align-items-center">
            <!--part1-->
              <div class="col-12 col-md-5">
                <img id="imageBox" src="{{ asset('img/'.$imagenes->first()['ruta'] ) }}" alt="{{ $imagenes->first()['ruta'] }}" class="img-fluid first-img">
                <div class="row p-2 justify-content-center">
                    @foreach ($imagenes as $img)
                        <div class="col-auto" id="img-mini">
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
                          <li>Recargable : {{ $product->recargable == 1 ? ('Si'): ('No') }} </li>                          <li>Forma: {{ $product->forma }}</li>
                          <li>Solar : {{ $product->solar == 1 ? ('Si'): ('No') }} </li>
                          <li>Giratorio : {{ $product->giratorio == 1 ? ('Si'): ('No') }} </li>
                          <li>Mata Mosco : {{ $product->mataMosco == 1 ? ('Si'): ('No') }} </li>
                          <li>Tecnologia: {{ $product->tecnologia }}</li>
                          <li>Consumo: {{ $product->consumo }}</li>
                          <li>Potencia: {{ $product->potencia }}</li>
                          <li>Lumenes: {{ $product->lumenes }}</li>
                          <li>Dimensiones: {{ $product->dimensiones }}</li>
                          <li>Forma: {{ $product->forma }}</li>
                          <li>Unidades: {{ $product->unidades }}</li>
                      </ul>
                     <a href="{{ url('iluminacionInterior/focos') }}" class="btn btn-dark mb-3"><i class="fa fa-lightbulb"></i> Volver</a>
                </div>
            </div>
        </div>
    </div>
             <!--Fin-->
                    
                </div>
    

   
    </div>

    <script>
        
    </script>
@endsection
