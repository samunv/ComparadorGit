<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OScomparer | Comparar</title>
    <link rel="stylesheet" href="../CSS/comparar.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../CSS/estiloheader.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/estilofooter.css?v=<?php echo time() ?>">
    <link rel="icon" href="../img/flechas-repetir (1).png" />
    <script src="../JS/comparar.js?v=<?php echo time(); ?>"></script>

</head>

<body>

    <?php
    include "header.php";
    ?>

    <section id="carrusel-dispositivos">
        <div class="caja-carrusel"><a href="#titulo-moviles"><img src="../img/SO Móviles prueba.png" alt="" srcset=""></a></div>
        <div class="caja-carrusel"><a href="#titulo-ordenadores"><img src="../img/SOpc-prueba3.png" alt=""></a></div>
        <div class="caja-carrusel"><a href="#titulo-consolas"><img src="../img/SOconsolas.png" alt=""></a></div>
        <div class="caja-carrusel">TV</div>
        <div class="caja-carrusel"><a href="#titulo-coches"><img src="../img/SOcoches2.png" alt=""></a></div>
    </section>
    <section id="botones-scroll">

    <div id="btn-derecha"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
    <div id="btn-izquierda"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" id="imagen-flecha2"></div>
    </section>


    <section id="titulo-moviles" class="titulo">
        <h1>Sistemas Operativos de Móviles</h1>
        <img src="../img/muesca-movil.png" alt="" width="40" height="40" class="iconos">
    </section>

    <section id="seccion-moviles" class="secciones"></section>

    <section id="titulo-ordenadores" class="titulo">
        <h1>Sistemas Operativos de Ordenadores</h1>
        <img src="../img/dispositivos.png" alt="" width="40" height="40" class="iconos">
    </section>

    <section id="seccion-ordenadores" class="secciones"></section>

    <section id="titulo-consolas" class="titulo">
        <h1>Sistemas Operativos de Consolas</h1>
        <img src="../img/mando.png" alt="" width="40" height="40" class="iconos">
    </section>



    <section id="seccion-consolas" class="secciones"></section>



    <section id="titulo-tv" class="titulo">
        <h1>Sistemas Operativos de TVs</h1>
        <img src="../img/pantalla.png" alt="" width="40" height="40" class="iconos">
    </section>

    <section id="seccion-tv" class="secciones"></section>

    <section id="titulo-coches" class="titulo">
        <h1>Sistemas Operativos de Coches</h1>
        <img src="../img/volante.png" alt="" width="40" height="40" class="iconos">
    </section>

    <section id="seccion-coches" class="secciones"></section>



    <?php
    include "footer.php"
    ?>
</body>

</html>