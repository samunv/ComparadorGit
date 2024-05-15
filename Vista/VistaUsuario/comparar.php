<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OScomparer | Comparar</title>
    <link rel="stylesheet" href="../CSS/comparar.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../CSS/estilofooter.css?v=<?php echo time() ?>">
    <link rel="icon" href="../img/flechas-repetir (1).png" />
    <script src="../JS/comparar.js?v=<?php echo time(); ?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>

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


    <section id="seccion-porque-oscomparer">

        <h1 class="texto-porque-oscomparer" id="primer-h1">¿Por qué comparar en OScomparer?</h1>
        <div class="seccion-respuestas">
            <div class="cajas-respuestas">
                <h2>Sistema de Puntos</h2>
                <p>Nuestro Sistema de Puntos depende de:
                    <br>
                    Seguridad: 15 puntos por punto.
                    <br>
                    Comunidad: 0.5 puntos por Millón.
                    <br>
                    Estatus: 10 puntos si es gratis.
                </p>
                <img src="../img/cuenta.png" alt="" width="70" height="70">
            </div>
            <div class="cajas-respuestas">
                <h2>Gráficas</h2>
                <p>Nuestro Sistema de Gráficas permite visualizar mejor, y a simple vista, las comparaciones los distintos SO. Las gráficas mostrarán los puntos de los SO de una forma mucho más visual.</p>
                <img src="../img/grafico-histograma.png" alt="" width="70" height="70">
            </div>
            <div class="cajas-respuestas">
                <h2>Tu Opinión Importa</h2>
                <p>En OScomparer, puedes compartir comentarios opinando de los distintos SO. Los usuarios tendrán en cuenta tu opinión a la hora de comparar un SO con otro.</p>
                <img src="../img/comentario-alt (1).png" alt="" width="70" height="70">
            </div>
        </div>
    </section>


    <section class="seccion-texto-boton">
        <section class="texto">
            <section id="titulo-moviles" class="titulo">
                <h1>Sistemas Operativos de Móviles</h1>
            </section>
            <section class="texto-explicativo">
                <h3>Elige dos SO para comparar. Pulsa en ellos para marcarlos.</h3>
            </section>
        </section>
        <div class="seccion-boton-comparar">
            <button type="button" class="btn-comparar" id="btn-comparar-Móviles">Comparar</button>
        </div>
    </section>
    <section id="seccion-moviles" class="secciones"></section>
    <section class="seccion-botones">
        <div id="btn-derecha-moviles" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda-moviles" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" class="izquierda"></div>
    </section>



    <div id="ventana-comparacion" class="ventana-comparacion">comparar</div>


    <section class="seccion-texto-boton">
        <section class="texto">
            <section id="titulo-ordenadores" class="titulo">
                <h1>Sistemas Operativos de Ordenadores</h1>
            </section>
            <section class="texto-explicativo">
                <h3>Elige dos SO para comparar. Pulsa en ellos para marcarlos.</h3>
            </section>
        </section>
        <div class="seccion-boton-comparar">
            <button type="button" class="btn-comparar" id="btn-comparar-Ordenadores">Comparar</button>
        </div>
    </section>
    <section id="seccion-ordenadores" class="secciones"></section>

    <section class="seccion-botones">
        <div id="btn-derecha-ordenadores" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda-ordenadores" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" class="izquierda"></div>
    </section>



    <section id="titulo-consolas" class="titulo">
        <h1>Sistemas Operativos de Consolas</h1>
    </section>
    <section class="texto-explicativo">
        <h3>Elige dos SO para comparar. Pulsa en ellos para marcarlos.</h3>
    </section>


    <section id="seccion-consolas" class="secciones"></section>

    <section class="seccion-botones">
        <div id="btn-derecha-consolas" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda-consolas" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" class="izquierda"></div>
    </section>



    <section id="titulo-tv" class="titulo">
        <h1>Sistemas Operativos de TVs</h1>
    </section>
    <section class="texto-explicativo">
        <h3>Elige dos SO para comparar. Pulsa en ellos para marcarlos.</h3>
    </section>

    <section id="seccion-tv" class="secciones"></section>

    <section class="seccion-botones">
        <div id="btn-derecha-tv" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda-tv" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" class="izquierda"></div>
    </section>



    <section id="titulo-coches" class="titulo">
        <h1>Sistemas Operativos de Coches</h1>
    </section>
    <section class="texto-explicativo">
        <h3>Elige dos SO para comparar. Pulsa en ellos para marcarlos.</h3>
    </section>

    <section id="seccion-coches" class="secciones"></section>

    <section class="seccion-botones">
        <div id="btn-derecha-coches" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45"></div>
        <div id="btn-izquierda-coches" class="botones"><img src="../img/circulo-de-flecha.png" alt="" width="45" height="45" class="izquierda"></div>
    </section>



    <?php
    include "footer.php"
    ?>
</body>

</html>