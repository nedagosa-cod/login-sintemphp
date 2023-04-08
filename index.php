<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/styles/css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="bx-login">
        <figure class="bx-login__figure">
            <img src="./public/img/user.png" alt="user">
        </figure>
        <h1 class="bx-login__bienvenido">Bienvenido</h1>
        <?php
            include "server/conexion.php";
            include "server/controlador.php";
        ?>
        <input placeholder="Usuario" class="bx-login__input" name="usuario" type="text">
        <input placeholder="Contraseña" class="bx-login__input" name="clave" type="password   ">
        <a href="#" class="bx-login__passfix">Olvidé Contraseña</a>
        <input type="submit" class="bx-login__btn-login" name="btningresar" value="INICIAR SESION">
        <a href="#" class="bx-login__register">Registrarse</a>
    </form>
</body>
</html>