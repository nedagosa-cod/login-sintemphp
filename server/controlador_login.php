<?php
    session_start();
    if (!empty($_POST["btningresar"])) {
        if (!empty($_POST["usuario"]) and !empty($_POST["clave"])) {
            $usuario = $_POST["usuario"];
            $password = $_POST["clave"];
            $sql = $conn->query("SELECT * FROM users WHERE usuario='$usuario' AND clave='$password'");
            if ($datos=$sql->fetch_object()){
                $_SESSION["id"] = $datos->id;
                $_SESSION["nombre"] = $datos->nombre;
                $_SESSION["apellido"] = $datos->apellido;
                header("location: public/pages/home.php");
            } else {
                echo "<div class='bx-login__alert'>ACCESO DENEGADO</div>";
            };
        } else {
            echo "Completa todos los campos";
        };
    };
?>