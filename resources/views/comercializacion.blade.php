@extends('layout')

@section('contenido')

<section class="section-hero-comercio">
<div class="container">
<div class="row align-items-center g-5 py-5">
    <div class="col-lg-12 text-center">
        <h1 class="display-3 fw-bold text-body-emphasis lh-1 mb-3">El arte de la presencia</h1>
        <p class="lead">Conoce dónde encontrarnos, nuestros métodos de pago y los certificados que respaldan nuestro compromiso con la calidad.</p>
    </div>
</div>
</div>
</section>

<section class="section-donde-encontrarnos py-5">
<div class="container">
    <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-4 text-center">Dónde Encontrarnos</h1>
    <p class="text-center mb-5 lead">Nuestros productos están disponibles en los mejores locales de la ciudad</p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card text-center h-100">
                <div class="card-body">
                    <img src="..." alt="Logo Local 1" style="height: 80px; object-fit: contain; margin-bottom: 15px;">
                    <h5 class="card-title">Nombre del Local 1</h5>
                    <p class="card-text small">Dirección y datos del local</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center h-100">
                <div class="card-body">
                    <img src="..." alt="Logo Local 2" style="height: 80px; object-fit: contain; margin-bottom: 15px;">
                    <h5 class="card-title">Nombre del Local 2</h5>
                    <p class="card-text small">Dirección y datos del local</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center h-100">
                <div class="card-body">
                    <img src="..." alt="Logo Local 3" style="height: 80px; object-fit: contain; margin-bottom: 15px;">
                    <h5 class="card-title">Nombre del Local 3</h5>
                    <p class="card-text small">Dirección y datos del local</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center h-100">
                <div class="card-body">
                    <img src="..." alt="Logo Local 4" style="height: 80px; object-fit: contain; margin-bottom: 15px;">
                    <h5 class="card-title">Nombre del Local 4</h5>
                    <p class="card-text small">Dirección y datos del local</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section-metodos-pago py-5 border-top">
<div class="container">
    <div class="row align-items-start g-5">
        <div class="col-lg-3">
            <h1 class="display-6 fw-bold text-body-emphasis lh-1">Métodos de Pago</h1>
        </div>
        <div class="col-lg-9">
            <div class="row row-cols-2 row-cols-md-4 g-3 justify-content-center">
                <div class="col">
                    <div class="card card-metodos-pago text-center">
                        <div class="card-body py-3">
                            <i class="bi bi-credit-card" style="font-size: 2rem; color: #c4956a;"></i>
                            <p class="card-text small mt-2">Tarjeta</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-metodos-pago text-center">
                        <div class="card-body py-3">
                            <i class="bi bi-bank" style="font-size: 2rem; color: #c4956a;"></i>
                            <p class="card-text small mt-2">Transferencia</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-metodos-pago text-center">
                        <div class="card-body py-3">
                            <i class="bi bi-cash-coin" style="font-size: 2rem; color: #c4956a;"></i>
                            <p class="card-text small mt-2">Efectivo</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-metodos-pago text-center">
                        <div class="card-body py-3">
                            <i class="bi bi-wallet2" style="font-size: 2rem; color: #c4956a;"></i>
                            <p class="card-text small mt-2">Billetera</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section-certificados py-5 border-top">
<div class="container">
    <p class="text-center text-muted mb-2 small">Nuestro compromiso</p>
    <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-5 text-center">Certificados y Garantías</h1>
    <div class="row row-cols-1 row-cols-md-3 g-5 justify-content-center">
        <div class="col">
            <div class="text-center">
                <div class="circle-svg-container">
                    <i class="bi bi-check-circle" style="font-size: 3.5rem; color: #28a745;"></i>
                </div>
                <h5 class="mt-4">Certificado de Calidad</h5>
                <p class="small text-muted">Estándares más altos</p>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <div class="circle-svg-container">
                    <i class="bi bi-shield-check" style="font-size: 3.5rem; color: #28a745;"></i>
                </div>
                <h5 class="mt-4">Garantía al Cliente</h5>
                <p class="small text-muted">Devolución garantizada</p>
            </div>
        </div>
        <div class="col">
            <div class="text-center">
                <div class="circle-svg-container">
                    <i class="bi bi-heart-fill" style="font-size: 3.5rem; color: #28a745;"></i>
                </div>
                <h5 class="mt-4">Ingredientes Naturales</h5>
                <p class="small text-muted">100% naturales</p>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
