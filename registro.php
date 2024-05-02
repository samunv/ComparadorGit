<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="icon" href="../img/flechas-repetir (1).png">
    <link rel="stylesheet" href="Vista/CSS/registrarse.css?v=<?php echo time() ?>" />
    <script src="Vista/JS/registro.js?v=<?php echo time() ?>"></script>
</head>

<body>
    <h1>Bienvenido/a</h1>
    <form class="formulario" id="formularioRegistro">
        <label for="nombreNuevo">Nombre de Usuario</label>
        <input type="text" id="nombreNuevo" name="nombreNuevo" required placeholder="Nombre" /><br />
        <label for="contrasenaNueva">Contraseña</label>
        <input type="password" id="contrasenaNueva" name="contrasenaNueva" required placeholder="Contraseña" /><br />
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Email" /><br />
        <button type="submit" class="btn-registrarse">Registrarse</button>
    </form>
    <a href="login.php">
        <button type="button" class="btn-volver">Volver atrás</button>
    </a>

    <br>
    <p class="texto-proteccion">OScomparer | Todos los derechos reservados</p>
</body>

</html>