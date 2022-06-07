<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form-style.css">
    <title>Soporte</title>
</head>
<body>
    <?php include("header.php") ?>
    <section>
        <form action="soporte.php" method="post" class="form">
            <div>
                <label for="email">Correo electrónico</label>
                <input type="text" name="email" placeholder="Correo electrónico" >
            </div>
            <div>
                <label for="asunto">Asunto</label>
                <input type="text" name="asunto" placeholder="Asunto" >
            </div>
            <div>
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
            </div>
            <input type="submit" value="Enviar ticket de soporte">
        </form>
    </section>
</body>
</html>
<?php include("autotheme.php") ?>