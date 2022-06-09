<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
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
    <h1>Detalles de producto</h1>
    <section>
        <div>
            <img src=<?php echo "images/$id.jpg";?> alt="imagen producto" class="img_prod">
            <h2></h2>
            <a href="carrito.php" class="btnCarrito">Agregar a carrito</a>
        </div>
    </section>
</body>
</html>
<?php include("autotheme.php")?>