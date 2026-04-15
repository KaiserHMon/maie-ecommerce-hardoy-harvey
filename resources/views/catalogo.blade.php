@extends('layout')

@section('contenido')
<div class="container py-5">
    <h1 class="display-5 fw-bold text-body-emphasis mb-5 text-center">Catálogo</h1>

    <!-- Grid de productos (2 por fila) -->
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Producto 1 -->
        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/alfajor-negro-relleno-de-dulce-de-leche.jpg" class="card-img-top" alt="Alfajores">
                <div class="card-body">
                    <h5 class="card-title">Alfajores</h5>
                    <p class="card-text">Deliciosos alfajores artesanales con distintos rellenos. Una golosina tradicional e irresistible.</p>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/receta-estilo-crumbl-cookies-1753959596.jpg" class="card-img-top" alt="Crumbl Cookies">
                <div class="card-body">
                    <h5 class="card-title">Crumbl Cookies</h5>
                    <p class="card-text">Galletas grandes y blandas con una textura crujiente en los bordes.</p>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/bigstock-Set-Of-Different-Multi-colored-276330859-e1581253559904.jpg" class="card-img-top" alt="Macarrones">
                <div class="card-body">
                    <h5 class="card-title">Macarrón</h5>
                    <p class="card-text">Elegantes macarrones artesanales con sabores variados y auténticos.</p>
                </div>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="col">
            <div class="card h-100">
                <img src="/images/productos/cono.jpg" class="card-img-top" alt="Conitos">
                <div class="card-body">
                    <h5 class="card-title">Conitos</h5>
                    <p class="card-text">Conos crujientes con rellenos irresistibles de dulce de leche.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
