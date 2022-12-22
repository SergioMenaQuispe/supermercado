<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/iconoP.png"> 
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/release/v5.6.3/css/all.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script> 
    </header>
    <title>El Aprobado-Inicio Session</title>
</head>
<body>
    
        <div class="classImg">
            <img src="img/TITULOA.png" width="550" height="100">
        </div>
    <div class="fondo">
        <div class="portada">
            <div>
                <img src="img/pseccion.jpg" alt="portada" height="700">
            </div>
            <div class="inicio_seccion">
            <h2>Bienvenido a Supermercado</h2>
            <h2>EL APROBADO</h2>
            <p><h3><br>Correo electronico</h3></p>
            <input type="text" name="usuario" id="email" placeholder="Ingresa tu Correo">
            <p><h3><br>Contraseña</h3></p>
            <input type="password" name="clave" id="contra" placeholder="Ingresa tu Contraseña">
            <p><br></p>
            <p><button id="btnAcceder" class="btn" type="button"><b>Ingresar</b></button></p>
            <p><br></p>
            <p><a href="/"><button id="btnCancelar" class="btn" type="button"><b>Regresar</b></button></a></p>
            <p><br></p>
            <ul>
                <li><a href="/registro_crear_cuenta">Registrate</a></li>
                <li><a href="/recuperar">Olvidé mi Contraseña/Usuario</a></li>
            </ul>
            <p class="plb_plomo"><br>Sitio seguro</p>
            <p class="message_error" id="mensaje" name="mensaje"></p>
            </div>
        </div>
    </div>
</body>
</html>
