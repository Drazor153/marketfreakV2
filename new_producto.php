<?php 
// Agregar nuevo producto al carro de un usuario
if($_GET){
    if(empty($_GET["email"])){
        echo "<script>alert('Debe iniciar sesión');window.location.href='login.php'</script>";
        die();
    }
    include "conexion.php";
    $objConexion = new conexion();
    $email = $_GET["email"];
    $id = $_GET["id"];
    $precio = $_GET["precio"];
    $carro = "SELECT `id_carro`,`precio_total` FROM `carro` WHERE `email_usuario` = '$email'";
    $resultado = $objConexion->consultar($carro);
    foreach($resultado as $carro){
        $id_carro = $carro["id_carro"];
        $pr_monto = $carro["precio_total"];
    }
    $pr_monto = $pr_monto + $precio;
    $update = "UPDATE `carro` SET `precio_total`='$pr_monto' WHERE `id_carro` = '$id_carro'";
    $objConexion->ejecutar($update);
    
    $sql = "INSERT INTO `linea_producto`(`id_carro`, `codigo_producto`, `cantidad`, `precio_linea`) 
    VALUES ('$id_carro','$id','1','$precio')";
    $objConexion->ejecutar($sql);
    
    echo "<script>alert($pr_monto);window.location.href='carro.php'</script>";
}
?>