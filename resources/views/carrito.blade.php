<!DOCTYPE html>
<html lang="en">


@php

    session_start();

    if(!isset($_SESSION["dni"])) {
        header("Location: /");
        exit();
    }

@endphp

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <script type="text/javascript" src="{{ asset('js/carrito.js') }}"></script>
    <title>Carrito</title>
</head>

<body>
    <div class="inputB2">
    </div>
    <div id="id_cliente" style="visibility: hidden">
        {{ $_SESSION['dni'] }}
    </div>
    <br>
    <H1>Carrito</H1>
    <br>
    <div class="modal-container" id="modal_container">
        <div class="modal">
            <button class="botoncin2" onclick="javascript:ventana_cerrar();">X</button>
            <ul class="navi">
                <a href="/frutas_y_verduras">
                    <li>&nbsp;&nbsp; Frutas y Verduras</li>
                </a>
                <a href="/panaderia_y_pasteleria">
                    <li>&nbsp;&nbsp; Panaderia y Pasteleria</li>
                </a>
                <a href="/carnes">
                    <li>&nbsp;&nbsp; Carnes</li>
                </a>
                <a href="/muebles">
                    <li>&nbsp;&nbsp; Muebles</li>
                </a>
                <a href="/tecnologia">
                    <li>&nbsp;&nbsp; Tecnologia</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="container">
        @foreach ($json as $producto)
        <div class="caja">
            <div id="{{ $producto->id_producto }}">
                <img src="img/{{ $producto->id_producto }}.jpg">
                <P class="nombre">&nbsp;&nbsp; {{ $producto->nombre }} </P><br>
                <P class="descripcion" style="font-size: 10px;color:rgb(95, 95, 95)"> {{ $producto->descripcion }}</P><br>
                <p class="precio">Precio: S/{{ $producto->precio }}</p><br>
                <button class="quitar">Quitar</button>
                <button class="sumar">+</button>
                <button class="restar">-</button>
                <p class="cantidad"> {{ $producto->cantidad }} </p>                  
                <p class="subtotal"></p>
            </div>
        </div>    
        @endforeach
    </div>

    <div>Monto Total: <p id="monto_total"></p></div>
    <button id="comprar">Comprar</button>
</body>

</html>