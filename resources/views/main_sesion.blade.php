
@php
    session_start();

    if(!isset($_SESSION["dni"])) {
        header("Location: /");
        exit();
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/iconoP.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/release/v5.6.3/css/all.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </header>
    <title>El Aprobado- HOLA</title>

</head>

<body style="background:rgb(253, 248, 237)">

    <div class="classImg">

        <img src="img/TITULOA.png" width="550" height="100">
    
    </div>
    <!-- PETER-->
    <div class="classImg2 ">

        <!-- <a href="inicio_session.php"><img src="img/loginA.png" width="50" height="30" aling="right">Cuenta</a> -->

        <p><a href="/"><button id="btnCancelar" class="btn" type="button"><b>Cerrar Sesion</b></button></a></p>	
    </div>
    <!-- PETER-->
    <div class="classImg3 ">

        <a href="/carrito"><img src="img/carrito.png" width="50" height="30" aling="right">Carro</a>


    </div>

    <div class="container">
        <input type="text" placeholder="Buscar Productos">
        <div class="btn">

            <i class=" fa fa-search"></i>
        </div>
    </div>



    <div class="inputB2">

        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/frutas_y_verduras">Frutas y Verduras</a></li>
                <li><a href="/panaderia_y_pasteleria">Panaderia y Pasteleria</a></li>
                <li><a href="/carnes">Carnes</a></li>
                <li><a href="/muebles">Muebles</a></li>
                <li><a href="/tecnologia">Tecnologia</a></li>
                <button onclick="javascript:ventana_barra();" class="botoncin"><img style="border-radius: 0;"src="img/barra2.png" height ="35" width="35" /></button>
            </ul>
        </nav>
    </div>

    <div class="carrousel">
        <div class="conteCarrousel">
            <div class="itemCarrousel" id="itemCarrousel-1">
                <div class="itemCarrouselTarjeta"><img src="img/imgaenOfeerta.png" height="100%" width="100%" /></div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta"><img src="img/imagenOferta2.png" height="100%" width="100%" /></div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-3">
                <div class="itemCarrouselTarjeta"><img src="img/imagenOrfeta5.png" height="100%" width="100%" /></div>
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="conteCarrouselController">
            <a href="#itemCarrousel-1">•</a>
            <a href="#itemCarrousel-2">•</a>
            <a href="#itemCarrousel-3">•</a>
        </div>
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
    <div class="productos">

        <center>
            <img src="img/mejoresOrfertas.png">
            <img src="img/producto1.jpg" height="20%" width="20%">
            <img src="img/producto2.jpg" height="20%" width="20%">
            <img src="img/producto3.jpg" height="20%" width="20%">
            <img src="img/producto4.jpg" height="20%" width="20%">
        </center>
    </div>
    <div class="productos">
        <center>
            <a href="tecnologia.html"><img class="img3" src="img/tecnoRegalo.png"></a>
        </center>
        <center>

            <img src="img/producto5.png" height="20%" width="20%">
            <img src="img/producto9.png" height="20%" width="20%">
            <img src="img/producto7.png" height="20%" width="20%">
            <img src="img/producto10.png" height="20%" width="20%">
        </center>
    </div>
    <div class="productos-electro">
        <center>
            <a href="electrodomesticos.html"><img class="img3" src="img/DESCELECT.png"></a>
        </center>

        <center>


            <div class="productos-electro2">
                <img class="img1" src="img/producto11.png" height="30%" width="30%">
                <img class="img2" src="img/producto12.png" height="30%" width="30%">
            </div>
            <div class="productos-electro3">
                <img class="img1" src="img/producto13.png" height="30%" width="30%">
                <img class="img2" src="img/producto14.png" height="30%" width="30%">
            </div>
        </center>



    </div>
    <div class="productos-electro">
        <center>
            <a href="deportes.html"><img class="img3" src="img/deportes.png"></a>
        </center>
        <center>

            <img src="img/producto1.jpg" height="20%" width="20%">
            <img src="img/producto2.jpg" height="20%" width="20%">
            <img src="img/producto3.jpg" height="20%" width="20%">
            <img src="img/producto4.jpg" height="20%" width="20%">
        </center>
        <br>
    </div>
    <div style="text-align:center;">
        <br>
        <hr>
        <h1>Metodos de pago</h1>
        <hr>
        <ul class="uli">
            <br>
            <li>Tarjetas de Credito</li>

            <li><img src="img/tarjetas_pasarela-1.png" height="20%" width="20%"></li>
            <br>
            <hr>
            <br>
            <li>Transferencia y Deposito En Efectivo</li>


            <li><img src="img/pagoefectivo.jpg" height="4%" width="4%"></li>
            <hr>
            <br>
            <li>Pago en Bancos</li>

            <li><img src="img/bcp.jpg" height="3%" width="3%"></li>
            <br>
            <hr>
            <br>
            <li>Tarjeta Debito</li>
            <li><img src="img/tarjetas_pasarela-1.png" height="20%" width="20%"></li>
        </ul>

        <hr>
        <br>
    </div>


</body>

</html>