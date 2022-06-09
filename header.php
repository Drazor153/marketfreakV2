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
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="gestion_catalogo.php">Gestionar catálogo</a></li>
            <li><a href="soporte.php">Soporte</a></li>
            <li>
                <a href="#">Nombre Admin</a>
                <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Nombre Usuario</a>
                <ul class="submenu">
                    <li><a href="#">Mis compras</a></li>
                    <li><a href="#">Saldo</a></li>
                    <li><a href="#">Configuración</a></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li><a href="#">Carrito</a></li>
            <li><a href="register.php">Registrarse</a></li>
            <li><a href="login.php">Iniciar sesión</a></li>
            
        </ul>
    </nav>
    
</header>