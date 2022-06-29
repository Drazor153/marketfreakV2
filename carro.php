<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/carro-style.css">
    <title>Mi carrito</title>
</head>
<body>
    <?php include "header.php";
    include "conexion.php";
    $objConexion = new conexion();
    // Asignar id del carro activo del usuario y su atributo precio_total
    $carro_activo = $_SESSION["carro_activo"];
    $sql_carro = "SELECT `precio_total` FROM `carro` WHERE `id_carro` = '$carro_activo'";
    $resultado = $objConexion->consultar($sql_carro);
    $total = $resultado[0]["precio_total"];

    // Listar los productos dentro del pedido
    $sql_lineas = "SELECT `codigo_producto`, `cantidad`, `precio_linea` FROM `linea_producto` 
    WHERE `id_carro` = '$carro_activo'";
    $resultado = $objConexion->consultar($sql_lineas);
    if(empty($resultado)){
        echo "<script>alert('Carrito vacio'), window.location.href='catalogo.php'</script>";
    }
    ?>
    <h1>CARRO</h1><br>
    <section class="cat">
        <table>
            <tr>
                <th>Imagen</th>
                <th>Cantidad pedida</th>
                <th>Precio parcial</th>
            </tr>
            <?php foreach($resultado as $linea) {
                $codigo = $linea["codigo_producto"];
                $res = $objConexion->consultar("SELECT `imagen` FROM `producto` WHERE `codigo` = '$codigo'");
                $imagen = $res[0]["imagen"];
                $cantidad = $linea["cantidad"];
                $precio_linea = $linea["precio_linea"];
                ?>
            <tr>
                <td>
                    <a href=<?php echo "producto.php?codigo=".$codigo;?>>
                    <img src=<?php echo "images/".$imagen;?> alt="imagen de producto" class="previs">
                    </a>
                </td>
                <td><?php echo $cantidad;?></td>
                <td><?php echo $precio_linea;?></td>
            </tr>
            <?php }?>
            <tr>
                <td colspan=2 style="text-align:center">Precio total:</td>
                <td><?php echo $total;?></td>
            </tr>
        </table>
        <a href=<?php echo "proceso_compra.php?id=".$total;?> class="btn">Confirmar compra</a>
    </section>
</body>
</html>
