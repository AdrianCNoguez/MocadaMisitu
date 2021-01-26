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
            <li class="breadcrumb-item text-white active" aria-current="page">Lamparas</li>
        @endsection
        @include('layouts.nav-pages')

            <div class="card mb-3">
             <!--Inserción-->
             <div class="row no-gutters align-items-center">
            <!--PIC-->
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
             <!--FIN-->
            <!--Descripciones-->
             <div class="col-md-7">
                    <div class="card-body">
                        <h3 class="title-product">{{ $product->nombre }}</h3>
                        <p class="card-text text-justify">{{ $product->descripcion }}</p>
                        <h5 class="card-title">Características</h5>
                        <ul>
                        <li>Marca: {{ $product->marca }}</li>
                        <li>Modelo: {{ $product->modelo }}</li>
                        <li>Alimentación: {{ $product->alimentacion }}</li>
                        <li>Protección: {{ $product->Proteccion }}</li>
                        <li>Consumo: {{ $product->Consumo }}</li>
                        <li>Potencia: {{ $product->Potencia }}</li>
                        <li>Lumenes: {{ $product->Lumenes }}</li>
                        <li>Dimensiones: {{ $product->Dimensiones }}</li>
                        <li>Forma: {{ $product->Forma }}</li>
                        <li>Unidades: {{ $product->Unidades }}</li>
                        <li>Sensor: {{ $product->Sensor }}</li>
                        <li>Material: {{ $product->material }}</li>
                        <li>Tipo de Montaje: {{ $product->TipoMontaje }}</li>
                        <li>Ambiente: {{ $product->Ambiente }}</li> 
                        <li>Color del Material: {{ $product->ColorMaterial }}</li>
                        <li>Movimiento: {{ $product->Movimiento }}</li>
                        <li>Instalacion: {{ $product->Instalacion }}</li>
                        <li>Solar: {{ $product->Solar == 1 ? ('Si'): ('No') }} </li>
                        <li>Pilas: {{ $product->Pilas == 1 ? ('Si'): ('No') }} </li>                      
                        <li>Electrico: {{ $product->Electrico == 1 ? ('Si'): ('No') }} </li>
                        </ul>
                        <p><h2 class="d-inline">${{ $product->precio }}</h2> IVA incluido</p>
                        <button type="button" class="btn btn-outline-dark btnlg">Comprar</button>
                    </div>
            </div>
            <!--Fin_descripciones-->
            
             </div>
                   
            </div>
    

   
    </div>
        
    </script>
@endsection
