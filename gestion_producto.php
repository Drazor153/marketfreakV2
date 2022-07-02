<!-- Para entrar a esta pagina, se requiere pasar el codigo de producto por el metodo GET -->
<?php
// if($_POST){
//     if(is_uploaded_file($_FILES["imagen"]["tmp_name"])){
//         $nombre = $_POST["nombre"];
//         $codigo = $_POST["codigo"];
//         $precio = $_POST["precio"];
//         $descripcion = $_POST["descripcion"];
//         $stock = $_POST["stock"];

//         $imagen = $_FILES["imagen"]["name"];
//         $dest = __DIR__."/images/".$imagen;

//         $objConexion = new conexion();
//         $sql = "INSERT INTO `producto`(`codigo`, `nombre`, `precio`, `imagen`, `descripcion`, `stock`)
//                 VALUES ('$codigo','$nombre','$precio','$imagen','$descripcion','$stock')";
//         $objConexion->ejecutar($sql);

//         if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $dest)){
//             echo "<script>alert('Catálogo actualizado!'); window.location.href='gestion_catalogo.php'</script>";
//         }
//     }
// }
if(!$_GET){
    echo "<script>alert('Acceso invalido'), window.location.href='gestion_catalogo.php'</script>";
}
if(!isset($_GET["codigo"])){
    echo "<script>alert('Acceso invalido'), window.location.href='gestion_catalogo.php'</script>";
}
session_start();
include("conexion.php");
$objConexion = new conexion();
$codigo = $_GET["codigo"];
$sql = "SELECT * FROM `producto` WHERE codigo = '$codigo'";
$producto = $objConexion->consultar($sql);

$nombre_producto = $producto[0]["nombre"];
$precio = $producto[0]["precio"];
$imagen = $producto[0]["imagen"];
$descripcion = $producto[0]["descripcion"];
$stock = $producto[0]["stock"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/producto-style.css">
    <link rel="stylesheet" href="styles/form-style.css">

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
            </div>
        </div>
        <h1>Editar datos</h1>
        
        <form action="<?php echo "gestion_producto.php?codigo=".$codigo;?>" method="post" class="form" enctype="multipart/form-data">
            <div>
                <label>Nuevo nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre" maxlength="50" value="<?php echo $nombre_producto;?>" required>
            </div>
            <div>
                <label>Nuevo precio:</label>
                <input type="number" name="precio" placeholder="Precio" value=<?php echo $precio;?> required>
            </div>
            <div>
                <label>Nueva imagen:</label>
                <input type="file" name="imagen" accept="image/png, image/jpeg">
            </div>
            <div>
                <label>Editar descripción:</label>
                <textarea name="descripcion" cols="30" rows="10" required ><?php echo $descripcion?></textarea>
            </div>
            <div>
                <label>Stock disponible:</label>
                <input type="number" name="stock" placeholder="Stock disponible en tienda" value=<?php echo $stock;?> required>
            </div>
            <input type="submit" value="Confirmar cambios">
        </form>
    </section>
</body>
</html>