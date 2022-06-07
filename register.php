<?php
    include("conexion.php");
    session_start();
    if ($_POST) {
        $password = $_POST['password'];
        if (strlen($password) < 5) {
            
        }
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $rut = $_POST['rut'];
        $email = $_POST['email'];
        $password2 = $_POST['password2'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $hpass = hash('sha256', $password);
        $hpass2 = hash('sha256', $password2);

        if($hpass == $hpass2){
            $objConexion = new conexion();
            $sql = "INSERT INTO `usuario`(`email`, `nombre`, `apellido`, `telefono`, `direccion`, `rut`, `password`, `saldo`) VALUES ('$email','$nombre','$apellido','$telefono','$direccion','$rut','$hpass', 0)";
            $objConexion->ejecutar($sql);
            $_SESSION['email'] = $email;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido'] = $apellido;
            echo "<script>window.location.href = 'login.php';</script>";
        } 
        else {
            echo "<script>alert('Las contraseñas no coinciden');</script>";
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
                <input type="password" name="password" placeholder="Mínimo 5 caracteres">
            </div>
            <div>
                <label>Confirmar contraseña:</label>
                <input type="password" name="password2" placeholder="Reingrese su contraseña" >
            </div>
            <input type="submit" value="Registrarse">
        </form>
        
    </section>
</body>
</html>
<?php include("autotheme.php");?>