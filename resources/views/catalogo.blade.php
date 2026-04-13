<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Maie Dulces Artesanales</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/variables.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">Maie - Dulces Artesanales</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="/catalogo" class="nav-link">Catalogo</a>
            </li>
            <li class="nav-item">
                <a href="/comercializacion" class="nav-link">Comercializacion</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Quienes Somos</a>
            </li>
        </ul>
    </header>
</div>

<div class="container py-5">
    <h1 class="display-5 fw-bold text-body-emphasis mb-5 text-center">Catálogo</h1>

    <!-- Grid de productos (2 por fila) -->
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Producto 1 -->
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del Producto</h5>
                    <p class="card-text">Descripción del producto</p>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del Producto</h5>
                    <p class="card-text">Descripción del producto</p>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del Producto</h5>
                    <p class="card-text">Descripción del producto</p>
                </div>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="Producto">
                <div class="card-body">
                    <h5 class="card-title">Nombre del Producto</h5>
                    <p class="card-text">Descripción del producto</p>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('templates.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
