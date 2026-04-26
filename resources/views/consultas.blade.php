@extends('layout')

@section('contenido')

<div class="container pb-2">
    <h1 class="text-center fw-bold">Consultas</h1>
    <p class="text-center">¿Tenes alguna duda sobre nuestros productos? ¡Escribinos!</p>
<div class="card mt-4">
    <div class="card-body">
        <h2>Formulario de contacto</h2>
         <form> 
            <div class="mb-3"> 
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3"> 
                <label class="form-label">Numero de telefono</label> 
                <input type="number" class="form-control" placeholder="Ingrese su numero">
            </div>
            
            <div class="mb-3"> 
                <label class="form-label">Mensaje</label> 
                <textarea class="form-control" rows="3"></textarea> 
            </div>        
            <button type="submit" class="btn btn-custom">
                Enviar mensaje
             </button> 
         </form>    
    </div>
</div>
</div> 

@endsection