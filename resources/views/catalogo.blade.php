@extends('layout')

@section('contenido')
<div class="container py-5">
    <h1 class="display-5 fw-bold mb-3 text-center">Catálogo de <span class="fst-italic fw-bold text-maie">Tentaciones</span></h1>
    <p class="lead text-center mb-5">Descubre nuestra exquisita selección de delicias artesanales, preparadas con amor y los mejores ingredientes.</p>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-5">
        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/alfajor-negro-relleno-de-dulce-de-leche.jpg" class="card-img-top" alt="Alfajores">
                <div class="card-body">
                    <h5 class="card-title text-center">Maie Negro</h5>
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/receta-estilo-crumbl-cookies-1753959596.jpg" class="card-img-top" alt="Crumbl Cookies">
                <div class="card-body">
                    <h5 class="card-title text-center">Maie Blanco</h5>
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/bigstock-Set-Of-Different-Multi-colored-276330859-e1581253559904.jpg" class="card-img-top" alt="Macarrones">
                <div class="card-body">
                    <h5 class="card-title text-center">Maie Frutos Rojos</h5>
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/cono.jpg" class="card-img-top" alt="Conitos">
                <div class="card-body">
                    <h5 class="card-title text-center">Cono Tentacion</h5>
                    <p class="card-text">El clasico conito de dulce de leche que tanto amas.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/cono.jpg" class="card-img-top" alt="Conitos">
                <div class="card-body">
                    <h5 class="card-title text-center">Cookie Pistachio</h5>
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/cono.jpg" class="card-img-top" alt="Conitos">
                <div class="card-body">
                    <h5 class="card-title text-center">Classic Cookie</h5>
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/cono.jpg" class="card-img-top" alt="Conitos">
                <div class="card-body">
                    <h5 class="card-title text-center">Chocarron</h5>
                    <p class="card-text">Un macarron + una explosion de chocolate = Chocarron</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/cono.jpg" class="card-img-top" alt="Conitos">
                <div class="card-body">
                    <h5 class="card-title text-center">Framarron</h5>
                    <p class="card-text">Macarron relleno de frambuesa</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
