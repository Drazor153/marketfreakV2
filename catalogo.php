<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/catalogo-style.css">
    <title>Catalogo</title>
</head>
<body>
    <?php include("header.php")?>
    <h1>Catálogo</h1><br>
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
                    <a href=<?php echo "producto.php?codigo=".$codigo?>>
                        <img src=<?php echo "images/".$imagen?> alt="imagen producto" class="img_prod">
                    </a>
                    <a href=<?php echo "add_linea.php?codigo=$codigo"."&precio=$precio";?> class="btn">Agregar a carrito</a>
                </td>
                <?php } ?>
            </tr>
        </table>
        
    </section>
</body>
</html>