<!DOCTYPE html>
<html lang="en">


@php
    session_start();

    $root = "/s";
    if(!isset($_SESSION["dni"])) {
        $root = "/";
    }

@endphp


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>Tecnologia</title>
</head>

<body>
    <div class="inputB2">

        <nav>
            <a href="{{ $root }}" class="titulo"><img src="img/TITULOMIN.png"></a>

            <ul>
                <li><a href="{{ $root }}">Inicio</a></li>
                <li><a href="/frutas_y_verduras">Frutas y Verduras</a></li>
                <li><a href="/panaderia_y_pasteleria">Panaderia y Pasteleria</a></li>
                <li><a href="/carnes">Carnes</a></li>
                <li><a href="/muebles">Muebles</a></li>
                <li><a href="/tecnologia">Tecnologia</a></li>
                <button onclick="javascript:ventana_barra();" class="botoncin"><img style="border-radius: 0;"src="img/barra2.png" height ="35" width="35" /></button>

            </ul>
        </nav>
    </div>
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
    <br>
    <H1>Encuentra Lo Mejor En Tecnologia Para Esta Navidad</H1>
    <br>
    <div class="container">
        @foreach ($json as $producto)
        <div class="caja">
            <div>
                <img src="img/{{ $producto->id_producto }}.jpg">
                <P>&nbsp;&nbsp; {{ $producto->nombre }} </P><br>
                <P style="font-size: 10px;color:rgb(95, 95, 95)"> {{ $producto->descripcion }}</P><br>
                <p>Marca: {{ $producto->tienda }}</p><br>
                <p>Precio: S/{{ $producto->precio }}</p><br>
                
                <div style="text-align:center">
                    <button class="vermas" id="{{ $producto->id_producto }}">AÑADIR AL CARRITO</button><br><br>
                </div>    
            </div>
        </div>    
        @endforeach


    </div>
</body>

</html>