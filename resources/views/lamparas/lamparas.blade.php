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


        <div class="row justify-content-center justify-content-lg-start mb-2">
            @foreach ($productos as $item)
            <div class="col-10 col-md-3 mb-3 no-gutters">
                <div class="card border-0 rounded-lg">
                    <div class="img-container p-0">
                        <a href="{{url('/iluminacionInterior/lamparas'.Str::slug($item->first()['nombre'].'-xs'.$item->first()['idProducto']))}}">
                            <img src="{{ asset('img/'.$item->first()['ruta'] ) }}" alt="img"s class="obj-img">
                        </a>
                    </div>

                    <div class="card-body pl-2 pr-2 pb-0 text-center">
                        <p class="card-title font-weight-bold">{{ $item->first()['nombre'] }}</p>
                        <a href="{{url('/iluminacionInterior/lamparas/'.Str::slug($item->first()['nombre'].'-xs'.$item->first()['idProducto'])) }}" class="btn green text-white mb-3"><i class="fas fa-eye"></i>Ver detalles</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
