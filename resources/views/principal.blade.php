@extends('layout')

@section('contenido')

<section class="section-hero">
<div class="container">
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Carrusel" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-4 fw-bold text-body-emphasis lh-1 mb-3">Dulces Artesanales</h1>
        <p class="lead">texto a decidir</p>
    </div>
</div>
</div>
</section>

<section class="section-products">
<div class="container">
<h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 text-center">Nuestros Productos</h1>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
        <img src="/images/productos/alfajor-negro-relleno-de-dulce-de-leche.jpg" class="card-img-top" alt="alfajor">
      <div class="card-body">
        <h5 class="card-title">Alfajores</h5>
        <p class="card-text">Deliciosos alfajores artesanales con distintos rellenos. Una golosina tradicional e irresistible.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/images/productos/receta-estilo-crumbl-cookies-1753959596.jpg" class="card-img-top" alt="crumbl cookie">
      <div class="card-body">
        <h5 class="card-title">Crumbl Cookies</h5>
        <p class="card-text">Galletas grandes y blandas con una textura crujiente en los bordes. Nuestras Crumbl cookies se preparan frescas con ingredientes premium, perfectas para compartir o disfrutar con un café o chocolate caliente.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/images/productos/bigstock-Set-Of-Different-Multi-colored-276330859-e1581253559904.jpg" class="card-img-top" alt="macarron">
      <div class="card-body">
        <h5 class="card-title">Macarrón</h5>
        <p class="card-text">Elegantes macarrones artesanales con sabores variados y auténticos. Estas delicadas galletas francesas tienen un exterior crujiente y un interior suave, perfectas como acompañamiento sofisticado para cualquier ocasión.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="/images/productos/cono.jpg" class="card-img-top" alt="cono de dulce de leche">
      <div class="card-body">
        <h5 class="card-title">Conitos</h5>
        <p class="card-text">Conos crujientes con rellenos irresistibles. Nuestros conitos traen deliciosos rellenos de chocolate, dulce de leche y crema pastelera. Un toque gourmet que combina la textura crujiente del barquillo con sabores inigualables.</p>
      </div>
    </div>
  </div>
</div>
<div class="text-center mt-3">
  <a href="/catalogo" class="btn btn-primary rounded px-4 py-2">Catalogo</a>
</div>
</div>
</section>


@endsection
