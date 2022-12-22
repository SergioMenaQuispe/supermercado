<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>Carrito</title>
</head>

<body>
    <div class="inputB2">
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
            <div>
                <img src="img/{{ $producto->id_producto }}.jpg">
                <P>&nbsp;&nbsp; {{ $producto->nombre }} </P><br>
                <P style="font-size: 10px;color:rgb(95, 95, 95)"> {{ $producto->descripcion }}</P><br>
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