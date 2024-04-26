<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OScomparer | Inicio</title>
    <link rel="stylesheet" href="../CSS/estiloindex.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../img/flechas-repetir (1).png">
    <script src="../JS/script.js?v=<?php echo time(); ?>"></script>
</head>

<body>
    <header>
        <div class="logo">
            <a href="inicio.php">
                <img src="../img/OScomparercanva__1_-removebg-preview.png" alt="" width="140" height="60">
            </a>
        </div>
        <nav>
            <ul>
                <li id="li-inicio">Inicio</li>

                <li id="li-graficas">Gráficas</li>

                <li id="li-comparar">Comparar</li>
            </ul>
        </nav>
        <div class="contenedor-buscador">

            <input type="text" id="buscador" class="buscador" placeholder="Buscar...">
            <div>
                <img src="../img/menu-puntos-vertical.png" alt="" width="15" height="15" title="volver" id="puntos">

            </div>
        </div>
        <div class="menu" id="menu">
            <ul>
                <li><a href="../loginPrincipal.html">Volver a Inicio de Sesión</a></li>
                <hr>
                <li>Configuración</li>
            </ul>
        </div>

    </header>



    <section class="seccion-presentacion">

        <div class="botones-presentacion">
            <h1>Compara con ayuda de Gráficas</h1>
            <button type="button" id="btn-graficas">Ir a Gráficas</button>
        </div>
        <div class="imagen-presentacion"><img src="../img/dibujo-grafico-de-linea.png" alt="" width="400" height="400"></div>

    </section>

    <div id="ventana" class="ventana">

        <img src="../img/controlar.png" alt="" width="50" height="50">
        <p>Has iniciado sesión exitosamente.</p>
        <span class="cerrar">Cerrar</span>



    </div>


    <section class="seccion-cuadrado" id="seccion-cuadrado">
        <a href="inicio.php#seccion-principal">
            <img src="../img/WINDOWS.png" alt="" id="foto-carrusel" />
        </a>
    </section>

    <h1 class="texto-deMoviles">Lo mejor de Móviles</h1>
    <section class="seccion-cuadrado2">
        <section class="seccionAndroid" id="seccionAndroid">
            <div class="Android">
                <h1>Android 14</h1>
            </div>
            <img src="../img/INTERFAZ_ANDROID.jpg" alt="" width="400px" />

            <button type="submit" class="btn-Android" id="btn-Android">Ver Detalles</button>

        </section>

        <section id="seccionAndroid-oculta">
            <div id="contenedor-oculto1">
                <div class="android-oculto">
                    <h1>Android 14</h1>
                </div>

                <table id="tabla1">
                    <tr>
                        <th><img src="../img/verificacion-de-escudo (1).png" alt="" width="50" height="50"></th>
                        <th><img src="../img/usuarios (1).png" alt="" width="50" height="50"></th>
                        <th><img src="../img/circulo-v.png" alt="" width="50" height="50"></th>
                        <th><img src="../img/gratis.png" alt="" width="50" height="50"></th>
                    </tr>
                    <tr>
                        <?php
                        require_once '../Dao/SistemaOperativoDAOimplementar.php';
                        require_once '../Modelo/SistemaOperativo.php';

                        $soDAOimp = new SistemaOperativoDAOimplementar();

                        $datos = $soDAOimp->leerSOpornombre("Android 14");

                        $longitud = count($datos);
                        if (is_array($datos)) {
                            for ($i = 0; $i < $longitud; $i++) {
                                $so = $datos[0];

                                echo "<td>" . $so->getSeguridad() . "</td>";
                                echo "<td>" . $so->getComunidad() . " Mill.</td>";
                                echo "<td>" . $so->getVersion() . "</td>";
                                echo "<td>" . $so->getGratis() . "</td>";
                            }
                        }
                        ?>
                    </tr>

                </table>


                <button type="submit" id="btnoculto1">Menos Detalles</button>
            </div>

        </section>



        <section class="seccioniOS" id="seccioniOS">

            <div class="iOS">
                <h1>iOS 17</h1>

                <button type="submit" class="btn-iOS" id="btn-iOS">Ver Detalles</button>

            </div>

            <img src="../img/interfaz_iOS.png" alt="" height="500px" />

        </section>

        <section id="seccioniOS-oculta">
            <div id="contenedor-oculto2">
                <div class="ios-oculto">
                    <h1>iOS 17</h1>
                </div>

                <table id="tabla2">
                    <tr>
                        <th><img src="../img/verificacion-de-escudo (1).png" alt="" width="50" height="50"></th>
                        <th><img src="../img/usuarios (1).png" alt="" width="50" height="50"></th>
                        <th><img src="../img/circulo-v.png" alt="" width="50" height="50"></th>
                        <th><img src="../img/gratis.png" alt="" width="50" height="50"></th>
                    </tr>
                    <tr>
                        <?php
                        require_once '../Dao/SistemaOperativoDAOimplementar.php';
                        require_once '../Modelo/SistemaOperativo.php';

                        $soDAOimp = new SistemaOperativoDAOimplementar();

                        $datos = $soDAOimp->leerSOpornombre("iOS 17");

                        $longitud = count($datos);
                        if (is_array($datos)) {
                            for ($i = 0; $i < $longitud; $i++) {
                                $so = $datos[0];

                                echo "<td>" . $so->getSeguridad() . "</td>";
                                echo "<td>" . $so->getComunidad() . " Mill.</td>";
                                echo "<td>" . $so->getVersion() . "</td>";
                                echo "<td>" . $so->getGratis() . "</td>";
                            }
                        }
                        ?>
                    </tr>

                </table>


                <button type="submit" id="btnoculto2">Menos Detalles</button>
            </div>

        </section>





    </section>




    <h1 class="texto-descubre">Descubre más</h1>
    <section class="seccion-principal" id="seccion-principal">

        <?php
        // Incluir el archivo que contiene la definición de la clase SistemaOperativoDAOimplementar
        require_once '../Dao/SistemaOperativoDAOimplementar.php';

        // Instanciar la clase SistemaOperativoDAO
        $soDAOimp = new SistemaOperativoDAOimplementar();

        $datos = $soDAOimp->leerSO();

        $longitud = count($datos);



        // Verificar si se encuentrael sistema operativo
        if (is_array($datos)) {

            for ($i = 0; $i < $longitud; $i++) {
                $sistemaOperativo = $datos[$i]; // Obtener el sistema operativo de la posición

                echo "<div class='contenedores'>";
                echo "<h3 id='nombre'>" . $sistemaOperativo->getNombre() . "</h3>";
                echo "<div id='info-detallada" . $i . "' >";
                echo "<p>Desarrollador: " . $sistemaOperativo->getFabricante() . "</p>";
                echo "<p>Arquitectura: " . $sistemaOperativo->getArquitectura() . "</p>";
                echo "<p>Comunidad: " . $sistemaOperativo->getComunidad() . " Mill.</p>";
                echo "<p>Seguridad: " . $sistemaOperativo->getSeguridad() . "</p>";
                echo "<p>Versión: " . $sistemaOperativo->getVersion() . "</p>";
                echo "<p>Dispositivos: " . $sistemaOperativo->getDispositivos() . "</p>";
                echo "<p>Gratis: " . $sistemaOperativo->getGratis() . "</p>";
                echo "</div>";
                echo "<img src='" . $sistemaOperativo->getImagen() . "' id='imagen" . $i . "' class='imagenes' width='90' height='90'/>";

                echo "<div id='comentario" . $i . "' class='comentarios'><img src='../img/comentario-alt.png' alt='' width='25' height='25' title='comentarios'></div>";
                echo "</div>";
            }
        } else {
            echo $datos;
        }

        ?>
    </section>


    <h1 class="texto-deConsolas">Lo mejor de Consolas</h1>

    <section class="seccion-cuadrado3" id="seccion-cuadrado3">
        <section class="seccionPS4" id="seccionPs4">
        
                <img src="../img/interfaz_PS4.jpg" alt="" width="700px" height="500px" />
            

        </section>
        <section class="seccionXbox" id="seccionXbox">
            
                <img src="../img/INTERFAZ_XBOX.webp" alt="" height="500px" width="700px" />
           

        </section>
    </section>


    <footer>

        <a href="https://github.com/JorgeNebrija" target="_blank">
            <img src="../img/github (1).png" alt="" width="30px" height="30px">
        </a>
        <a href="https://trello.com/b/5tIKwnbm/comparador" target="_blank">
            <img src="../img/trello.png" alt="" width="30px" height="30px">
        </a>
    </footer>
</body>

</html>