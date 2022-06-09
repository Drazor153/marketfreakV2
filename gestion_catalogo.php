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
        <div>
            <img src="images/NA001.jpg" alt="imagen producto" class="img_prod">
            <a href="gestion_producto.php?id=NA001" class="btn">Modificar producto</a>
        </div>
        <div>
            <img src="images/OP001.jpg" alt="imagen producto" class="img_prod">
            <a href="gestion_producto.php?id=OP001" class="btn">Modificar producto</a>
        </div>
    </section>
</body>
</html>
<?php include("autotheme.php");?>