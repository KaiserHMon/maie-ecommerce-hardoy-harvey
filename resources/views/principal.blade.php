<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maie Dulces Artesanales</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/styles.css">
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

<div class="container">
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-4 fw-bold text-body-emphasis lh-1 mb-3">Dulces Artesanales</h1>
        <p class="lead">texto a decidir</p>
    </div>
</div>
</div>

<div class="container">
<h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 text-center">Nuestros Productos</h1>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
        <img src="/img/alfajor-negro-relleno-de-dulce-de-leche.jpg" class="card-img-top" alt="alfajor">
      <div class="card-body">
        <h5 class="card-title">Alfajores</h5>
        <p class="card-text">Deliciosos alfajores artesanales con distintos rellenos. Una golosina tradicional e irresistible.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/img/receta-estilo-crumbl-cookies-1753959596.jpg" class="card-img-top" alt="crumbl cookie">
      <div class="card-body">
        <h5 class="card-title">Crumbl Cookies</h5>
        <p class="card-text">Galletas grandes y blandas con una textura crujiente en los bordes. Nuestras Crumbl cookies se preparan frescas con ingredientes premium, perfectas para compartir o disfrutar con un café o chocolate caliente.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/img/bigstock-Set-Of-Different-Multi-colored-276330859-e1581253559904.jpg" class="card-img-top" alt="macarron">
      <div class="card-body">
        <h5 class="card-title">Macarrón</h5>
        <p class="card-text">Elegantes macarrones artesanales con sabores variados y auténticos. Estas delicadas galletas francesas tienen un exterior crujiente y un interior suave, perfectas como acompañamiento sofisticado para cualquier ocasión.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/img/cono.jpg" class="card-img-top" alt="cono de dulce de leche">
      <div class="card-body">
        <h5 class="card-title">Conitos</h5>
        <p class="card-text">Conos crujientes con rellenos irresistibles. Nuestros conitos traen deliciosos rellenos de chocolate, dulce de leche y crema pastelera. Un toque gourmet que combina la textura crujiente del barquillo con sabores inigualables.</p>
      </div>
    </div>
  </div>
</div>
<div class="text-center mt-5">
  <a href="/catalogo" class="btn btn-primary rounded px-4 py-2">Catalogo</a>
</div>
</div>



@include('templates.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
