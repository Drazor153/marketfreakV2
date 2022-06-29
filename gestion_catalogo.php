<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/catalogo-style.css">
    <title>Gestión de catálogo</title>
</head>
<body>
    <?php include("header.php");?>
    <h1>Gestión de catálogo</h1><br>
    <a href="add_producto.php" class="btn">Agregar nuevo producto</a>
    <section class="cat">
        <table>
            <tr>
            <?php 
            include("conexion.php");
            $objConexion = new conexion();
            $resultado = $objConexion->consultar("SELECT * FROM producto");
            foreach ($resultado as $producto) { 
                $nombre_producto = $producto["nombre"];
                $codigo = $producto["codigo"];
                $imagen = $producto["imagen"];
                $precio = $producto["precio"];
            ?>
                <td>
                    <p><?php echo $nombre_producto?></p>
                    <img src=<?php echo "images/".$imagen?> alt="imagen producto" class="img_prod">
                    <a href=<?php echo "gestion_producto.php?id=".$codigo?> class="btn">Modificar producto</a>
                </td>
            <?php } ?>
            </tr>
        </table>
        
    </section>
</body>
</html>