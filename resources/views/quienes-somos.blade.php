@extends('layout')

@section('contenido')

<section class="section-about py-5">
<div class="container">
    <h1 class="fs-2 fs-md-1 fw-bold text-body-emphasis lh-1 mb-4">El detras de escena de Maie Alfajores</h1>
    <p>Somos un emprendimiento familiar que se dedica a crear dulces artesanales con ingredientes naturales de alta calidad</p>
</div>

<div class="container"> 
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/productos/maie-1.jpg" class="d-block w-100" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/productos/maie-61.jpg" class="d-block w-100" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/productos/maie-16.jpg" class="d-block w-100" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</section>

@endsection
