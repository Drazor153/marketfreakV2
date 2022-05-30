<header class="header">
    <a href="./"><img src="images/logo.png" alt="logo" id="logo"></a>
    
    <!-- SLIDER -->
    <label class="switch">
        <input type="checkbox" id="slider-theme" onclick="changeTheme()"/>
        <span class="slider round"></span>
    </label>
    
    <form action="catalogo.php" method="get">
        <input type="text" class="buscador" name="buscador">
        <input type="submit" class="btnBuscar" value="Buscar" >
    </form>
    

    <ul class="nav">
        <li><a href="catalogo.php">Catálogo</a></li>
        <li><a href="soporte.php">Soporte</a></li>
        <li style="float:right"><a href="login.php">Iniciar sesión</a></li>
        <li style="float:right"><a href="register.php">Registrarse</a></li>
    </ul>
</header>