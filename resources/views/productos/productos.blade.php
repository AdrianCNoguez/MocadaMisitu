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
        <li class="breadcrumb-item text-white ctive" aria-current="page">Más productos</li>
        @endsection
        @include('layouts.nav-pages')

        

        <div class="row justify-content-center justify-content-lg-start mb-2">
           
            @foreach ($produc as $item)
            <div class="col-10 col-md-3 mb-3 no-gutters">
                    <div class="card border-0 rounded-lg">
                        <div class="img-container p-0">
                            <a href="">
                                <img src="{{ asset('img/'.$item->first()['ruta'] ) }}" alt="img"s class="obj-img">
                            </a>
                        </div>

                        <div class="card-body pl-2 pr-2 pb-0 text-center">
                            <p class="card-title font-weight-bold">{{ $item->first()['nombre'] }}</p>
                            <a href="{{url('/producto/'.Str::slug($item->first()['nombre'].'-xs'.$item->first()['idProducto']))}}" class="btn green mb-3 text-white"><i class="fas fa-eye"></i>Ver detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
         


        </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

    </div>
@endsection
