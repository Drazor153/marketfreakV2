<?php 
session_start();
if($_POST){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hpass = hash('sha256', $password);
    $admin = $_POST["admin"];
    include("conexion.php");
    $objConexion = new conexion();
    $sql = "SELECT * FROM `usuario` WHERE `email` = '$email'";
    $resultado = $objConexion->consultar($sql);
    if(!empty($resultado)){
        foreach($resultado as $usuario){
            if($usuario["password"] == $hpass){
                $_SESSION["email"] = $email;
                $_SESSION["admin"] = $admin;
                $_SESSION["nombre"] = $usuario["nombre"];
                $_SESSION["apellido"] = $usuario["apellido"];
                $_SESSION["rut"] = $usuario["rut"];
                $_SESSION["telefono"] = $usuario["telefono"];
                $_SESSION["direccion"] = $usuario["direccion"];
                $_SESSION["saldo"] = $usuario["saldo"];
                echo "<script>alert('Bienvenido'), window.location.href='./'</script>";
            }else{
                echo "<script>alert('Correo y/o contraseña incorrectos')</script>";
            }
        }
    }else{
        echo "<script>alert('Correo y/o contraseña incorrectos')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="styles/form-style.css">
</head>
    
<body>
    <?php include "header.php"?>
    <!-- h1 es el titulo central de la pagina-->
    <h1> Bienvenidos a MarketFreak </h1>

    <form action="login.php" method="post" class="form">
        <div>
            <label for="email">Correo:</label>
            <input type="text" placeholder="Escribe tu correo" name="email" id="correo" >
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Escribe tu contraseña" name="password" id="contraseña">
        </div>
        <div class="div_admin">
            <label for="admin" class="label_admin">¿Eres administrador?</label>
            <label class="switch">
                <input type="checkbox" name="admin"/>
                <span class="slider round"></span>
            </label>
        </div>
        <input type="submit" value="Iniciar sesión">
    </form>
    <div class="div_register">
        <label for="registro">¿Eres nuevo?</label>
        <a href="register.php" class="btn_register">Registrarse</a>
    </div>

</body> 
<html>
<?php include "autotheme.php"?>