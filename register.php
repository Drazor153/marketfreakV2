<?php
    session_start();
    if(isset($_POST['rut'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $rut = $_POST['rut'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $hpass = hash('sha256', $password);
        $hpass2 = hash('sha256', $password2);

        $_SESSION['nombre'] = $nombre;

        if($hpass == $hpass2){
            // $sql = "INSERT INTO usuarios (nombre, apellido, rut, email, password, telefono, direccion) VALUES ('$nombre', '$apellido', '$rut', '$email', '$hpass', '$telefono', '$direccion')";
            // $result = mysqli_query($conn, $sql);
            // if($result){
            //     echo "<script>alert('Usuario registrado exitosamente');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            // }else{
            //     echo "<script>alert('Error al registrar usuario');</script>";
            // }
        } 
        // else {
        //     echo "<script>alert('Las contraseñas no coinciden');</script>";
        // }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/register-style.css">
    <title>Catalogo</title>
</head>
<body>
    <?php include("header.php");?>
    <section>
        <form action="register.php" method="post" class="form-register">
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre" >
            </div>
            <div>
                <label>Apellidos:</label>
                <input type="text" name="apellido" placeholder="Apellidos" >
            </div>
            <div>
                <label>Rut:</label>
                <input type="text" name="rut" placeholder="Rut sin puntos ni guión" >
            </div>
            <div>
                <label>Teléfono:</label>
                <input type="text" name="telefono" placeholder="Teléfono (8 dígitos)" maxlength="8" >
            </div>
            <div>
                <label>Dirección:</label>
                <input type="text" name="direccion" placeholder="Dirección" >
            </div>
            <div>
                <label>Correo:</label>
                <input type="email" name="email" placeholder="Correo" >
            </div>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="password" placeholder="Mínimo 5 caracteres" >
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