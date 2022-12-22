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
    <title>Crear Cuenta</title>
</head>
<body>   
    <div class="contenedor2">
        <div class="form">
            <form action="/api/registrar" method="POST" enctype="multipart/form-data" >
                <h2>Crear tu cuenta y contraseña</h2>
                <p>
                    <label for="numero">Documento de identidad</label>
                </p>
                <p>
                    <input type="number" class="caja_datos" maxlength="8" name="dni" id="dni" placeholder="DNI o Pasaporte">
                </p>
                <!--Nuevos DAtos -->
                <p>
                    <label>Nombres</label>
                </p>
                <p>
                    <input type="text" class="caja_datos" name="nombre" id="nombre" placeholder="Nombre Completo">
                </p>

                <p>
                    <label>Primer Apellido</label>
                </p>
                <p>
                    <input type="text" class="caja_datos" name="pApellido" id="pApellido" placeholder="Primer Apellido">
                </p>

                <p>
                    <label>Segundo Apellido</label>
                </p>
                <p>
                    <input type="text" class="caja_datos" name="sApellido" id="sApellido" placeholder="Segundo Apellido">
                </p>
                <p>
                    <label for="genero">Genero:</label><br/>
                </p>
                <p>
                    <input type="radio" name="genero" value="M"> Masculino
                    <input type="radio" name="genero" value="F"> Femenino
                </p>
                <p>
                    <label for="Fecha de Nacimiento">Fecha:</label>
                </p>
                <?php
                $fecha_nacimiento = date("Y-m-d");
                ?>
                <p>
                    <input type="date" name="fecha" id="fecha" value=<?= $fecha_nacimiento?> >
                </p>
                <p>
                    <label>Celular</label>
                </p>
                <p>
                    <input type="number" class="caja_datos" maxlength="9" name="celular" id="celular" placeholder="Celular">
                </p>

                <!--Nuevos Datos-->
                <p>
                    <label>Correo</label>
                </p>
                <p>
                    <input type="email" class="caja_datos" name="email" id="email" placeholder="Correo Electronio">
                </p>
                <p>
                    <label>Contraseña:</label>
                </p>
                <p>
                    <input type="password" class="caja_datos" name="contra" id="contra" placeholder="Contraseña"> 
                </p>
                <p>
                    <input class="caja_datos" name="verificarClave" id="verificarClave" type="password" placeholder="Confirma tu Contraseña">
                </p>
                <p>
                    <input type="checkbox" name="terminosycondi"> Acepto los términos y condiciones
                </p>
                <div>
                    
                    <button id="btnRegistrar" class="sigPaso" type="submit">Solicitar</button>

                    <a href="login"><button type="button" class="boton">Cancelar</button></a>

                </div>
            </form>    
        </div>
    </div>

</body>
</html>