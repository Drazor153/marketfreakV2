<!-- Para entrar a esta pagina, se requiere pasar el codigo de producto por el metodo GET -->
<?php
if(!$_GET){
    echo "<script>alert('Acceso invalido'), window.location.href='catalogo.php'</script>";
}
if(!isset($_GET["codigo"])){
    echo "<script>alert('Acceso invalido'), window.location.href='catalogo.php'</script>";
}
session_start();
include("conexion.php");
$objConexion = new conexion();
$codigo = $_GET["codigo"];
$sql = "SELECT * FROM `producto` WHERE codigo = '$codigo'";
$resultado = $objConexion->consultar($sql);
foreach ($resultado as $producto) {
    $nombre_producto = $producto["nombre"];
    $precio = $producto["precio"];
    $imagen = $producto["imagen"];
    $descripcion = $producto["descripcion"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/producto-style.css">
    <title>Catalogo</title>
</head>
<body>
    <?php include("header.php")?>
    <section>
        <div class="prod_container">
            <img src=<?php echo "images/".$imagen?> alt="imagen producto" class="img_prod">
            <div class="info_prod">
                <h1><?php echo $nombre_producto?></h1>
                <h2 class="precio">Precio: $<?php echo $precio?></h2>
                <p><?php echo $descripcion?></p>
                <a href=<?php echo "add_linea.php?codigo=$codigo"."&precio=$precio"."&email=$email"?> class="boton_carrito">Agregar a carrito</a>
            </div>
        </div>
    </section>
</body>
</html>