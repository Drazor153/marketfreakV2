<?php session_start();
include "var_sesion.php";
if($_GET){
    include("conexion.php");
    $objConexion = new conexion();
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM `producto` WHERE codigo = '$id'";
        $resultado = $objConexion->consultar($sql);
        foreach ($resultado as $producto) {
            $nombre_producto = $producto["nombre"];
            $precio = $producto["precio"];
            $imagen = $producto["imagen"];
            $descripcion = $producto["descripcion"];
        }
    }
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
                <a href=<?php echo "new_producto.php?id=$id"."&precio=$precio"."&email=$email"?> class="boton_carrito">Agregar a carrito</a>
            </div>
        </div>
    </section>
</body>
</html>
<?php include("autotheme.php")?>