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
    @include('layouts.browser')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                  </nav>
            </div>

            <div class="col">
                <div class="row">
                    <div class="col-12 col-md-auto">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="{{ asset('img\images\Licuadora Portatil Recargable 4 Aspas Vaso Grande 380ml-rosa-1.png') }}" alt="..." class="img-fluid">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="{{ asset('img\images\Licuadora Portatil Recargable 4 Aspas Vaso Grande 380ml-rosa-1.png') }}" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
