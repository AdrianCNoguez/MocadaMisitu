<div class="row my-3">
    <div class="col-12 bg-blue browser">
            <div class="row  justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-4 order-2 order-md-1 text-center">
                    <div class="breadcrumbs">
                        <ol class="breadcrumb justify-content-center p-0 m-0">
                            <li class="breadcrumb-item text-white"><a href="{{url('/')}}">Inicio</a></li>
                            @yield('breadcrumbs')
                          </ol>
                    </div>
                </div>
                <div class="col-12 col-md-auto nav-browser order-1 order-md-2">
                    <form class="d-inline-flex justify-content-end pr-3 py-2">
                      <input class="form-control  text-center" type="search" placeholder="         Buscar" aria-label="Search">
                      <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
    </div>
</div>
