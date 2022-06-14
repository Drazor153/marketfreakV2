<?php session_start();
include "var_sesion.php";?>
<?php
    include("conexion.php");
    if($_POST){
        if(is_uploaded_file($_FILES["imagen"]["tmp_name"])){
            $nombre = $_POST["nombre"];
            $codigo = $_POST["codigo"];
            $precio = $_POST["precio"];
            $descripcion = $_POST["descripcion"];
            $stock = $_POST["stock"];

            $imagen = $_FILES["imagen"]["name"];
            $dest = __DIR__."/images/".$imagen;

            $objConexion = new conexion();
            $sql = "INSERT INTO `producto`(`codigo`, `nombre`, `precio`, `imagen`, `descripcion`, `stock`)
                    VALUES ('$codigo','$nombre','$precio','$imagen','$descripcion','$stock')";
            $objConexion->ejecutar($sql);

            if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $dest)){
                echo "<script>alert('Catálogo actualizado!'); window.location.href='gestion_catalogo.php'</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/form-style.css">
    <title>Agregar producto</title>
</head>
<body>
    <?php include("header.php");?>
    <h1>Agregar nuevo producto</h1><br>
    <section>
        <form action="add_producto.php" method="post" class="form" enctype="multipart/form-data">
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre del producto" maxlength="50">
            </div>
            <div>
                <label>Código de producto:</label>
                <input type="text" name="codigo" placeholder="Código del producto" maxlength="10">
            </div>
            <div>
                <label>Precio:</label>
                <input type="number" name="precio" placeholder="Precio">
            </div>
            <div>
                <label>Imagen:</label>
                <input type="file"name="imagen" accept="image/png, image/jpeg">
            </div>
            <div>
                <label>Descripción:</label>
                <textarea name="descripcion" cols="30" rows="10" placeholder="Mensaje"></textarea>
            </div>
            <div>
                <label>Stock disponible:</label>
                <input type="number" name="stock" placeholder="Stock disponible en tienda">
            </div>
            <input type="submit" value="Agregar nuevo producto">
        </form>
        
    </section>
</body>
</html>
<?php include("autotheme.php");?>