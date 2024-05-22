<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="icon" href="../img/alt-administrador.png" />
    <link rel="stylesheet" href="../CSS/estiloheader.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/estilofooter.css?=<?php echo time() ?>">
    <link rel="stylesheet" href="../CSS/paneldecontrol.css?=<?php echo time() ?>">
    <script src="../JS/paneldecontrol.js?=<?php echo time() ?>"></script>


</head>

<body>
    <?php
    include("header.php");
    ?>

    <h1 id="h1-panel-de-control">Panel de Control</h1>

    <section id="seccion-1">
        <div class="contenedores-seccion1"><a href="#seccion-administrar-datos"><img src="../img/administrar-datos (2).png" alt="" width="680" height="150"></a></div>
        <div class="contenedores-seccion1"><a href="#seccion-administrar-usuarios"><img src="../img/administrar-usuarios-fondo.png" alt="" width="680" height="150"></a></div>
    </section>

    <section class="secciones" id="seccion-administrar-datos">
        <h1>Administrar Datos</h1>
        <section id="seccion-contenedores"></section>
    </section>



    <div id="ventana-eliminar-oculta">
        <img src="../img/advertencia.png" alt="advertencia" width="200" height="200">
        <h2>¿Estás seguro de que quieres eliminar <span id="nombre-del-elemento"></span>?</h2>
        <form id="formulario-eliminar">

            <div class="caja-botones">
                <button type="button" id="btn-eliminar">Eliminar</button>
                <button type="button" id="btn-cancelar">Cancelar</button>
            </div>

        </form>

    </div>
    <div id="overlay" class="overlay"></div>



    <section class="secciones" id="seccion-administrar-usuarios">
        <h1>Administrar Usuarios</h1>
        <section id="seccion-tabla"></section>
    </section>

    <a href="#h1-panel-de-control"><button type="button" id="btn-subir" class="btn-subir">🡩</button></a>

    <?php
    include("footer.php");
    ?>
</body>

</html>