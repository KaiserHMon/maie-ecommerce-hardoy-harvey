@extends('layout')

@section('contenido')

<section class="section-about py-5">
<div class="container">
    <h1 class="fs-2 fs-md-1 fw-bold lh-1 mb-4 text-center">El detrás de escena de Maie Alfajores</h1>
    <p class="text-center">Somos un emprendimiento familiar que se dedica a crear dulces artesanales con ingredientes naturales de alta calidad</p>
</div>

<div class="container">
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/productos/maie-1.jpg" class="d-block w-100 img-fluid rounded shadow" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/productos/maie-61.jpg" class="d-block w-100 img-fluid rounded shadow" style="max-height: 600px; object-fit: cover; object-position: center;" alt="...">
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

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Cómo surgió Maie</h2>
        <p class="lead">Todo empezó en agosto de 2020, cuando Elisa Harvey, en plena cuarentena y buscando escapar del aburrimiento, decidió meterse a la cocina a experimentar. Lo que empezó como un pasatiempo rápidamente se convirtió en algo más: sus primeros alfajores llegaron a manos de amigos cercanos, y el resto fue boca a boca.</p>
        <p>Con el tiempo, las redes sociales le dieron el impulso que necesitaba para crecer, y Maie Alfajores se fue haciendo un lugar en la Ciudad de Corrientes. Desde el primer dia, la filosofia fue simple: usar los mejores ingredientes disponibles y entregar siempre un producto lo mas rico posible. Eso no cambio.</p>
      </div>
      <div class="col-md-6">
        <img src="/images/productos/maie-61.jpg" class="img-fluid rounded shadow" style="max-height: 750px; margin-left: 120px;" alt="Origen de Maie">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h2 class="py-5 bg-light text-center">Quiénes están detrás de Maie</h2>

      <h4>Cocina</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolorem natus reprehenderit doloremque, quae illo saepe quasi totam sapiente facere animi! Minus adipisci, autem libero blanditiis natus perspiciatis similique nisi.</p>

      <h4>Management</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda maiores eveniet eos ratione deserunt ipsa voluptatum vero minima totam impedit, repellat cum possimus quaerat maxime, placeat suscipit consequuntur veritatis consequatur?</p>
  </div>
</section>
@endsection
