<?php session_start();?>
<?php
    if ($_POST) {
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if (strlen($password) >= 5) {
            $hpass = hash('sha256', $password);
            $hpass2 = hash('sha256', $password2);
            if($hpass == $hpass2){
                include("conexion.php");
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $rut = $_POST['rut'];
                $email = $_POST['email'];
                $telefono = $_POST['telefono'];
                $direccion = $_POST['direccion'];

                $objConexion = new conexion();
                $sql = "INSERT INTO `usuario`(`email`, `nombre`, `apellido`, `telefono`, `direccion`, `rut`, `password`, `saldo`) 
                VALUES ('$email','$nombre','$apellido','$telefono','$direccion','$rut','$hpass', 0)";
                $date = date("Y-m-d");

                $sql_cart = "INSERT INTO `carro`(`email_usuario`, `precio_total`, `fecha`) 
                VALUES ('$email','0','$date')";

                $objConexion->ejecutar($sql);
                $objConexion->ejecutar($sql_cart);
                echo "<script>alert('Usuario registrado correctamente'), window.location.href='login.php'</script>";
            }else{
                echo "<script>alert('Las contraseñas no coinciden')</script>";
            }
        }else{
            echo "<script>alert('La contraseña debe tener al menos 5 caracteres')</script>";
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Catalogo</title>
</head>
<body>
    <?php include("header.php");?>
    <section>
        <form action="register.php" method="post" class="form">
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre" maxlength="25">
            </div>
            <div>
                <label>Apellidos:</label>
                <input type="text" name="apellido" placeholder="Apellidos" maxlength="25">
            </div>
            <div>
                <label>Rut:</label>
                <input type="text" name="rut" placeholder="Rut sin puntos ni guión" maxlength="10" >
            </div>
            <div>
                <label>Teléfono:</label>
                <input type="text" name="telefono" placeholder="Teléfono (8 dígitos)" maxlength="8" >
            </div>
            <div>
                <label>Dirección:</label>
                <input type="text" name="direccion" placeholder="Dirección" maxlength="45">
            </div>
            <div>
                <label>Correo:</label>
                <input type="email" name="email" placeholder="Correo" maxlength="45">
            </div>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="password" placeholder="Mínimo 5 caracteres" id="id_password">
            </div>
            <div>
                <label>Confirmar contraseña:</label>
                <input type="password" name="password2" placeholder="Reingrese su contraseña" id="id_password2">
            </div>
            <input type="submit" value="Registrarse">
        </form>
        
    </section>
</body>
</html>
<?php 
include "autotheme.php";
?>