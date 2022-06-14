<?php session_start();
include "var_sesion.php";?>
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
        <?php 
        include("conexion.php");
        $objConexion = new conexion();
        $resultado = $objConexion->consultar("SELECT * FROM producto");
        ?>
        <?php foreach ($resultado as $producto) { ?>
        <table>
            <tr>
                <td>
                    <p><?php echo $producto["nombre"]?></p>
                    <a href=<?php echo "producto.php?id=".$producto['codigo']?>>
                        <img src=<?php echo "images/".$producto['imagen']?> alt="imagen producto" class="img_prod">
                    </a>
                    <a href="catalogo?id=.php" class="btn">Agregar a carrito</a>
                </td>
            </tr>
        </table>
        <?php } ?>
    </section>
</body>
</html>
<?php include("autotheme.php")?>
