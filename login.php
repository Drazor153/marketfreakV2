<?php 
    session_start();
    if($_SESSION){
        $nombre = $_SESSION['nombre'];
        echo "<script>alert('hola $nombre')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
</head>
<body>
    <h1>PARA INICIAR SESION</h1>
</body>
</html>