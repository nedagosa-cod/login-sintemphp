<?php
    if (!empty($_POST["btningresar"])) {
        if (!empty($_POST["usuario"]) and !empty($_POST["clave"])) {
            $usuario = $_POST["usuario"];
            $password = $_POST["clave"];
            $sql = $conn->query("SELECT * FROM users WHERE usuario='$usuario' AND clave='$password'");
            if ($datos=$sql->fetch_object()){
                header("location: public/pages/home.php");
            } else {
                echo "El usuario o contraseña no existen";
            };
        } else {
            echo "Completa todos los campos";
        };
    };
?>