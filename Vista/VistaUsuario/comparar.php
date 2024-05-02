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
        <div class="caja-carrusel"><a href="#titulo-moviles"><img src="../img/SO Móviles prueba.png" alt=""></a></div>
        <div class="caja-carrusel"><a href="#titulo-ordenadores"><img src="../img/SOpc-prueba3.png" alt=""></a></div>
        <div class="caja-carrusel"><a href="#titulo-consolas"><img src="../img/SOconsolas.png" alt=""></a></div>
        <div class="caja-carrusel"><a href="#titulo-tv"><img src="../img/SOtvs.png" alt=""></a></div>
        <div class="caja-carrusel"><a href="#titulo-coches"><img src="../img/SOcoches2.png" alt=""></a></div>
        <div class="caja-carrusel" id="elemento-invisible"></a></div>
    </section>
    <section id="botones-scroll">

        <div id="btn-derecha" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" id="imagen-flecha2"></div>
    </section>


    <section id="seccion-porque-oscomaprer">

        <h1 class="texto-porque-oscomparer" id="primer-h1">¿Por qué OScomparer?</h1>
        <div class="seccion-respuestas">
            <div class="cajas-respuestas">
                <h2>Sistema de Puntos</h2>
                <p>Utilizamos un Sistema de Puntos para comparar los SO. Dependerán de factores como:
                    <br>
                    La seguridad: 10 puntos por punto de seguridad.
                    <br>
                    La comunidad: 1 punto por cada Millón.
                    <br>
                    Estatus: 10 puntos si es gratis.
                </p>
                <img src="../img/cuenta.png" alt="" width="100" height="100">
            </div>
            <div class="cajas-respuestas">
                <h2>Gráficas</h2>
                <p>Nuestro Sistema de Gráficas permite visualizar mejor, y a simple vista, las comparaciones de varios SO a la misma vez. Podrás ver gráficas de puntuación, de seguridad o de comunidad.</p>
                <img src="../img/grafico-histograma.png" alt="" width="100" height="100">
            </div>
            <div class="cajas-respuestas">
                <h2>Tu Opinión Importa</h2>
                <p>En OScomparer, puedes escribir y publicar comentarios opinando de los distintos Sistemas Operativos. Los usuarios tendrán en cuenta tu opinión a la hora de comaprar un SO con otro.</p>
                <img src="../img/comentario-alt (1).png" alt="" width="100" height="100">
            </div>
        </div>
    </section>



    <section id="titulo-moviles" class="titulo">
        <h1>Sistemas Operativos de Móviles</h1>
    </section>

    <section id="seccion-moviles" class="secciones"></section>
    <section class="seccion-botones">
        <div id="btn-derecha-moviles" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda-moviles" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" class="izquierda"></div>
    </section>

    

    <section id="titulo-ordenadores" class="titulo">
        <h1>Sistemas Operativos de Ordenadores</h1>
    </section>

    <section id="seccion-ordenadores" class="secciones"></section>

    <section class="seccion-botones">
        <div id="btn-derecha-ordenadores" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda-ordenadores" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" class="izquierda"></div>
    </section>



    <section id="titulo-consolas" class="titulo">
        <h1>Sistemas Operativos de Consolas</h1>
    </section>



    <section id="seccion-consolas" class="secciones"></section>



    <section id="titulo-tv" class="titulo">
        <h1>Sistemas Operativos de TVs</h1>
    </section>

    <section id="seccion-tv" class="secciones"></section>

    <section id="titulo-coches" class="titulo">
        <h1>Sistemas Operativos de Coches</h1>
    </section>

    <section id="seccion-coches" class="secciones"></section>



    <?php
    include "footer.php"
    ?>
</body>

</html>