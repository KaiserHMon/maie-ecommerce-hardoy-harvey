@extends('layout')

@section('contenido')
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="mb-4 text-center fw-bold">Términos, Condiciones y Aviso Legal</h1>
            
            <div class="card shadow-sm border-0 bg-light p-4 p-md-5">
                <div class="mb-5">
                    <h2 class="h4 border-bottom pb-2">1. Aviso Legal y Aceptación</h2>
                    <p>Este sitio web es operado por <strong>Maie Dulces Artesanales</strong>. El acceso y uso de este sitio web, así como la compra de productos, están sujetos a los siguientes términos y condiciones. Al navegar o comprar en Maie, usted acepta estos términos en su totalidad.</p>
                </div>

                <div class="mb-5">
                    <h2 class="h4 border-bottom pb-2">2. Servicios Ofrecidos</h2>
                    <p>Maie ofrece la venta de productos de repostería artesanal, incluyendo alfajores, cookies, macarrones y conitos. Nos reservamos el derecho de modificar la oferta de productos, descripciones y precios en cualquier momento sin previo aviso.</p>
                </div>

                <div class="mb-5">
                    <h2 class="h4 border-bottom pb-2">3. Política de Privacidad</h2>
                    <p>Toda la información personal proporcionada por el cliente (nombre, dirección, correo electrónico, etc.) se utiliza exclusivamente para procesar pedidos y mejorar la experiencia de compra. Maie se compromete a no compartir ni vender sus datos a terceros, garantizando la confidencialidad de la información bajo las normas de Protección de Datos Personales.</p>
                </div>

                <div class="mb-5">
                    <h2 class="h4 border-bottom pb-2">4. Procedimientos de Venta y Pagos</h2>
                    <p>Las ventas se realizan a través de nuestra plataforma online o canales oficiales de comunicación. Los pedidos se consideran confirmados una vez que el pago ha sido acreditado. Aceptamos diversas formas de pago que se detallan en el proceso de checkout.</p>
                </div>

                <div class="mb-5">
                    <h2 class="h4 border-bottom pb-2">5. Entregas y Tiempos</h2>
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent px-0"><strong>Formas de entrega:</strong> Realizamos envíos a domicilio mediante servicios de mensajería privada y ofrecemos puntos de retiro gratuitos debidamente informados.</li>
                        <li class="list-group-item bg-transparent px-0"><strong>Tiempos de entrega:</strong> Al ser productos artesanales, el tiempo de elaboración es de 24 a 48 horas hábiles. El tiempo de envío final dependerá de la zona de destino (estimado entre 2 y 5 días hábiles).</li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h2 class="h4 border-bottom pb-2">6. Garantías y Soporte Postventa</h2>
                    <p>Al tratarse de productos alimenticios perecederos, no se aceptan devoluciones una vez entregado el producto en condiciones óptimas. No obstante, Maie garantiza la calidad de sus ingredientes y elaboración.</p>
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent px-0"><strong>Reclamos:</strong> En caso de recibir un producto dañado por el transporte, el cliente debe notificarnos dentro de las 12 horas de recibido para coordinar una reposición.</li>
                        <li class="list-group-item bg-transparent px-0"><strong>Soporte:</strong> Brindamos atención personalizada para cualquier duda sobre el estado de su pedido o consultas sobre ingredientes a través de nuestro correo de contacto o WhatsApp oficial.</li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h2 class="h4 border-bottom pb-2">7. Limitación de Responsabilidad</h2>
                    <p>Maie no se responsabiliza por el mal uso o almacenamiento inadecuado de los productos por parte del cliente que pueda afectar su calidad o frescura. Es responsabilidad del comprador seguir las recomendaciones de conservación indicadas.</p>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="/" class="btn btn-custom rounded px-4 py-2">Volver al Inicio</a>
            </div>
        </div>
    </div>
</section>
@endsection
