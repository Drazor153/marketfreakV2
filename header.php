<!-- Encabezado del sitio web, se asignan variables de sesion, modifica barra de navegacion e implemente el cambio automatico de tema -->

<?php
$admin = false;
$logged = false;
$email = "";
if(isset($_SESSION["email"])){
    // Se asignan variables de sesion, se pueden utilizar para cualquier pagina del sitio web si se incluye header.php
    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $admin = $_SESSION["admin"];
    $email = $_SESSION["email"];
    $logged = true;
    }
?>
<link rel="stylesheet" href="styles/header-style.css">
<link rel="stylesheet" href="styles/switchStyle.css">
<link rel="stylesheet" href="switchStyleV2.css">

<script src="switchTheme.js"></script>

<!-- Barra de navegacion que cambia dependiendo de $logged y $admin -->
<header class="encabezado">
    <div>
        <div class="logo">
            <a href="./" id="logo_ref"><img src="images/logo.png" alt="logo" id="logo"></a>
            <!-- SLIDER -->
            <input type="checkbox" id="toggle" onclick=changeTheme()>
            <label for="toggle" class="button"></label>
        </div>
        <div class="busqueda">
            <form action="catalogo.php" method="get">
                <input type="text" class="f_buscador" name="buscador" placeholder="Busca tu producto deseado">
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
                <a href="#"><?php echo $nombre?></a>
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
            <li><a href="carro.php">Carrito</a></li>
            <?php } ?>
            <?php if(!$logged){?>
            <li><a href="register.php">Registrarse</a></li>
            <li><a href="login.php">Iniciar sesión</a></li>
            <?php } ?>
            
        </ul>
    </nav>
    
</header>

<!-- Tema automatico de sesion-->
<script>
    function getCookie(cname) {
        let name = cname + "="; 
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
        }
    let bod = document.body
    let theme = getCookie("theme")
    switch (theme) {
        case "dark":
            bod.className = "dark-mode-s"
            document.getElementById("toggle").checked = true
            break;
        case "light":
            bod.className = "light-mode-s"
            document.getElementById("toggle").checked = false
            break;
        default:
            break;
    }
</script>