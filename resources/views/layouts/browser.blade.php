<!-- BUSCADOR -->
<div class="container">
    <div class="row justify-content-around ">
      <div class="col-auto">
        <div class="buscador">
          <form class="d-inline-flex" method="get" action="{{ route('search.success') }}">
            <input class="form-control me-2 text-center" type="search" placeholder="         Buscar" aria-label="Search" id="search" name="product">
            <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- FIN -->
