@extends('layout')

@section('contenido')

<section class="section-about py-5">
<div class="container">
    <h1 class="fs-2 fs-md-1 fw-bold lh-1 mb-4 text-center">El detrás de escena de Maie Alfajores</h1>
    <p class="text-center">Somos un emprendimiento familiar que se dedica a crear dulces artesanales con ingredientes naturales de alta calidad</p>
</div>

<div class="container">
<div id="carouselExampleFade" class="carousel slide carousel-fade shadow-lg rounded">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/productos/maie-1.jpg" class="d-block w-100 img-fluid rounded shadow" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/productos/maie-22.jpeg" class="d-block w-100 img-fluid rounded shadow" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/productos/maie-16.jpg" class="d-block w-100 img-fluid rounded shadow" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
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

<section class="py-5" style="background-color: #F6F3EE;">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Cómo surgió Maie</h2>
        <p class="lead">Todo empezó en agosto de 2020, cuando Elisa Harvey, en plena cuarentena y buscando escapar del aburrimiento, decidió meterse a la cocina a experimentar. Lo que empezó como un pasatiempo rápidamente se convirtió en algo más: sus primeros alfajores llegaron a manos de amigos cercanos, y el resto fue boca a boca.</p>
        <p>Con el tiempo, las redes sociales le dieron el impulso que necesitaba para crecer, y Maie Alfajores se fue haciendo un lugar en la Ciudad de Corrientes. Desde el primer dia, la filosofia fue simple: usar los mejores ingredientes disponibles y entregar siempre un producto lo mas rico posible. Eso no cambio.</p>
      </div>
      <div class="col-md-6">
        <img src="/images/productos/maie-61.jpg" class="ms-auto d-block img-fluid rounded shadow" style="max-height: 750px;" alt="Origen de Maie">
      </div>
    </div>
  </div>
</section>

<section class="py-5" style="background-color: #FCF9F4;">
  <div class="container text-center">
    <h2 class="mb-5">Quienes estan detras de Maie</h2>
    <p class= "mb-5 text-center">Ellos son los responsables de que puedas disfrutar de los mejores dulces artesanales en Corrientes</p>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/personas_maie/elisa_ia_imgstock.png" alt="Elisa">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-white">Elisa</h5>
              <p class="text-white">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/personas_maie/wini_imgstock.png" alt="Wini">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-white">Wini</h5>
              <p class="text-white"> Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/personas_maie/anaedwin_ia_imgstock.png" alt="Ana y Edwin">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-white">Ana y Edwin</h5>
              <p class="text-white">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/personas_maie/rosa_rosana_imgstock.png" alt="Rosana y Rosa">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-white">Rosana y Rosa</h5>
              <p class="text-white">Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection
