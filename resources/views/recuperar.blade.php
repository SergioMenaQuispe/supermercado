<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/iconoP.png"> 
    <link rel="stylesheet" href="css/crear_cuenta.css">
    <!-- tipografias: Martel - Belgrano - Bitter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&display=swap" rel="stylesheet">
    <!-- tipografias: Belgrano -->
    <title>Olvidé mi usuario o contraseña</title>
</head>
<body>
    <h1>Recupera tu Cuenta</h1>
    <div class="contenedor">
        <h3>Documento de identidad</h3>
        <input type="number" class="caja_datos" maxlength="8" name="numero" id="dni" placeholder="DNI o Pasaporte">
        <h3>Correo afiliado</h3>
        <p class="plb_plomo" >Ingresar tu correo electronico</p>
        <input type="email" name="usuario" id="email" placeholder="Ingresa tu Correo">
        <p><br></p>
        <div>
            <a href="confirCorreo.php"><button type="button" class="sigPaso">Solicitar</button></a>
            <a href="/login"><button type="button" class="boton">Cancelar</button></a>
        </div>
    </div>
</body>
</html>