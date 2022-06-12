<?php
if(!isset($_SESSION['logged'])){
    $_SESSION['logged'] = false;
    $_SESSION['admin'] = false;
}
$admin = true;
$logged = false;
if(isset($_SESSION["email"])){
    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $admin = $_SESSION["admin"];
    }
?>
<link rel="stylesheet" href="styles/header-style.css">
<link rel="stylesheet" href="styles/switchStyle.css">

<script src="switchTheme.js"></script>

<header class="encabezado">
    <div>
        <div>
            <a href="./"><img src="images/logo.png" alt="logo" id="logo"></a>
            <!-- SLIDER -->
            <label class="switch">
                <input type="checkbox" id="slider-theme" onclick="changeTheme()"/>
                <span class="slider round"></span>
            </label>
        </div>
        <div>
            <form action="catalogo.php" method="get">
                <input type="text" class="buscador" name="buscador">
                <input type="submit" class="btnBuscar" value="Buscar" >
            </form>
        </div>        
    </div>    
    <nav class="nav">
        <ul>
            <?php if(!$admin){ ?>
            <li><a href="catalogo.php">Catálogo</a></li> <?php } ?>
            <?php if($admin) {?>
            <li><a href="gestion_catalogo.php">Gestionar catálogo</a></li> <?php } ?>
            <li><a href="soporte.php">Soporte</a></li>
            <?php if($admin) {?>
            <li>
                <a href="#">Nombre Admin</a>
                <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="logout.php">Cerrar Sesión</a></li>
                </ul>
            </li>
            <?php } 
            if($logged and !$admin){?>
            <li>
                <a href="#"><?php echo $nombre." ".$apellido?></a>
                <ul>
                    <li><a href="#">Mis compras</a></li>
                    <li><a href="#">Saldo</a></li>
                    <li><a href="#">Configuración</a></li>
                    <li><a href="logout.php">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li><a href="#">Carrito</a></li>
            <?php } ?>
            <?php if(!$logged){?>
            <li><a href="register.php">Registrarse</a></li>
            <li><a href="login.php">Iniciar sesión</a></li>
            <?php } ?>
            
        </ul>
    </nav>
    
</header>