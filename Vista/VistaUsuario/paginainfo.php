<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oscomparer | Info</title>
    <link rel="stylesheet" href="../CSS/paginainfo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/estiloheader.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/estilofooter.css?=<?php echo time() ?>">
    <link rel="icon" href="../img/flechas-repetir (1).png" />
    <script src="../JS/paginainfo.js?v=<?php echo time(); ?>"></script>

</head>

<body>
    <?php
    include("header.php");
    ?>
    <section id="seccion-filtros">
        <table class="tabla-filtros">
            <tr>
                <td><img src="../img/muesca-movil.png" alt="" width="40" height="40" id="icono-movil"></td>
                <td><img src="../img/dispositivos.png" alt="" width="40" height="40" id="icono-pc"></td>
                <td><img src="../img/mando.png" alt="" width="40" height="40" id=""></td>
                <td><img src="../img/pantalla.png" alt="" width="40" height="40" id=""></td>
                <td><img src="../img/volante.png" alt="" width="40" height="40" id=""></td>
                <td> <img src="../img/gratis.png" alt="" width="40" height="40" id="" /></td>
                <td><img src="../img/usd-circulo.png" alt="" width="40" height="40" id=""></td>

            </tr>
            <tr>
                <td>Móviles</td>
                <td>Ordenadores</td>
                <td>Consolas</td>
                <td>Televisión</td>
                <td>Coches</td>
                <td>Gratis</td>
                <td>De pago</td>
            </tr>
        </table>

    </section>
    <div class="titulo">
        <h1>Buscar</h1>
    </div>

    <section id="seccion-principal"></section>
    <?php
    include("footer.php");
    ?>
</body>

</html>