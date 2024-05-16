<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../JS/actualizar.js?v=<?php echo time() ?>"></script>

</head>

<body>
    <h1>Actualizar <span id="nombre-del-so"></span></h1>
    <form id="formulario-actualizar">
        <label for="comunidad">Comunidad Nueva:</label><br>
        <input type="number" name="comunidad" id="comunidad" max="7000" placeholder="Comunidad" required><br>
        <label for="seguridad">Seguridad Nueva:</label><br>
        <input type="number" name="seguridad" id="seguridad" min="1" max="10" placeholder="Seguridad" required><br>
        <label for="version">Version Nueva:</label><br>
        <input type="text" name="version" id="version" maxlength="15" placeholder="Versión" required>

<h1>Datos que no se pueden cambiar:</h1>
        <input type="text" value="nombre" readonly name="nombre" id="input-nombre">
        <input type="text" value="fabricante" readonly name="fabricante" id="input-fabricante">
        <input type="text" value="idSO" readonly name="idSO" id="input-idSO">
        <input type="text" value="arquitectura" readonly name="arquitectura" id="input-arquitectura">
        <input type="text" value="dispositivos" readonly name="dispositivos" id="input-dispositivos">
        <input type="text" value="gratis" readonly name="gratis" id="input-gratis">
        <input type="text" value="imagen" readonly name="imagen" id="input-imagen">

        <button type="submit" id="btn-actualizar">Actualizar</button>
    </form>
</body>

</html>