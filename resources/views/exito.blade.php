@extends('layout')

@section('contenido')

<section>
    <h1 class="mt-5 mb-5 fw bold text-center">Carga de formulario exitosa</h1>
        <p class="lead mt-2 mb-5 text-center">Hola <strong>{{$nombre}}</strong>, qué bueno recibir tu mensaje. Un miembro
        del equipo de ventas se pondrá en contacto con vos al correo: <strong>{{$email}}</strong> ¡Muchas gracias!
</p>
</section>


@endsection