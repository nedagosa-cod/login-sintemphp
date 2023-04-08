<?php
    session_start();
    if (empty($_SESSION['id'])){
        header("location: ../../index.php");
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a tu cuenta
        <?php
            echo $_SESSION['nombre']." ".$_SESSION['apellido'];
        ?>
    </h1>
    <a href="../../server/controlador_cerrar_sesion.php">SALIR</a>
</body>
</html>