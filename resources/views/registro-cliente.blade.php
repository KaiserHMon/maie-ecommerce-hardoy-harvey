@extends('layout')

@section('contenido')

<section class="vh-100 bg-image"
  style="background-image: url('{{ asset('images/productos/maie-2.jpg') }}'); background-size: cover; background-position: center;">
  <div class="mask d-flex align-items-center h-100" style="background-color: rgba(98, 43, 22, 0.2);">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card shadow-lg" style="border-radius: 15px; background-color: rgba(252, 249, 244, 0.95);">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/logo/LOGO_MAIE_navbar.png') }}" alt="Maie Logo" style="height: 50px;">
                    <h2 class="text-maie fw-bold mt-2">Crear una cuenta</h2>
                </div>

              <form action="javascript:void(0);">

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Nombre</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" style="border-color: #be8e75;" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Correo electrónico</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" style="border-color: #be8e75;" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Contraseña</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" style="border-color: #be8e75;" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repite tu contraseña</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" style="border-color: #be8e75;" />
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" style="border-color: #9A4600;" />
                  <label class="form-check-label" for="form2Example3g">
                    Acepto todos los <a href="{{ url('/terminos-de-uso') }}" class="text-maie"><u>Términos de servicio</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-custom btn-block btn-lg w-100">Registrarse</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">¿Ya tienes una cuenta? <a href="{{ url('/login') }}"
                    class="fw-bold text-maie"><u>Inicia sesión aquí</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
