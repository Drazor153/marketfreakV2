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
        <div>
            <img src="images/NA001.jpg" alt="imagen producto" class="img_prod">
            <a href="producto.php?id=NA001" class="btnDetalle">Detalles</a>
            <a href="carrito.php" class="btnCarrito">Agregar a carrito</a>
        </div>
        <div>
            <img src="images/OP001.jpg" alt="imagen producto" class="img_prod">
            <a href="producto.php?id=OP001" class="btnDetalle">Detalles</a>
            <a href="carrito.php" class="btnCarrito">Agregar a carrito</a>
        </div>
    </section>
</body>
</html>
<?php include("autotheme.php")?>
