<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OScomparer | Inicio</title>
    <link rel="stylesheet" href="../CSS/estiloindex.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../img/OScomparericono .png">
    <script src="../JS/script.js?v=<?php echo time(); ?>"></script>
</head>

<body>
    <header>
        <div class="logo"><img src="../img/OScomparercanva__1_-removebg-preview.png" alt="" width="120" height="50"></div>
        <nav>
            <ul>
                <li>Inicio</li>

                <li>Gráficas</li>

                <li>Comparar</li>
            </ul>
        </nav>
        <div class="contenedor-buscador">
            <img src="../img/busqueda.png" alt="" width="20" height="20">
            <input type="text" id="buscador" class="buscador" placeholder="Buscar...">
        </div>
    </header>



    <section class="seccion-presentacion">

        <div class="botones-presentacion">
            <h1>Compara Sistemas Operativos</h1>
            <button type="button" id="btn-graficas">Ver gráficas</button>
            <button type="button" id="">Comparar</button>
        </div>
        <div class="imagen-presentacion"><img src="../img/dibujo-grafico-de-linea.png" alt="" width="400" height="400"></div>

    </section>
    <!--
    <div id="ventana-iniciarsesion" class="ventana-iniciarsesion">

        <div class="logo-formulario"><img src="img/OScomparerlogogrande.png" alt="" width="200" height="70"></div>



        <form action="VistaUsuario/loginPrincipal.php" method="post" class="formulario">
            <label for="nombre">Nombre de Usuario</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre"><br>
            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" required placeholder="Contraseña"><br>
            <button type="submit" class="btn-iniciarsesion">Iniciar sesión</button>
        </form>
        <div class="contenedor-botones">
            <a href="VistaUsuario/registro.html">
                <button type="submit" class="btn-registrarse">No tengo cuenta</button>
            </a>
            <br></br>
            <a href="VistaAdmin/loginadmin.html">
                <button type="submit" class="btn-admin">Iniciar sesión como Administrador</button>
            </a>
        </div>


    </div>
-->

    <section class="seccion-cuadrado">
        <a href="inicio.php#seccion-principal">
            <img src="../img/WINDOWS.png" alt="" id="foto-carrusel" />
        </a>
    </section>

    <section class="seccion-cuadrado2">
        <section class="seccionAndroid">
            <div class="Android">
                <h1>Android</h1>
            </div>
            <img src="../img/INTERFAZ_ANDROID.jpg" alt="" width="400px" />
            <a href="">
                <button type="submit" class="btn-Android">Más Información</button>
            </a>
        </section>
        <section class="seccioniOS">

            <div class="iOS">
                <h1>iOS</h1>
                <a href="">
                    <button type="submit" class="btn-iOS">Más Información</button>
                </a>
            </div>
            <img src="../img/interfaz_iOS.png" alt="" height="500px" />

        </section>
    </section>

    <section class="seccion-principal" id="seccion-principal">

        <?php
        // Incluir el archivo que contiene la definición de la clase SistemaOperativoDAO
        require_once '../Dao/SistemaOperativoDAOimplementar.php';

        // Instanciar la clase SistemaOperativoDAO
        $soDAOimp = new SistemaOperativoDAOimplementar();

        $datos = $soDAOimp->leerSO();

        $longitud = count($datos);



        // Verificar si se encontró el sistema operativo
        if (is_array($datos)) {

            for ($i = 0; $i < $longitud; $i++) {
                $sistemaOperativo = $datos[$i]; // Obtener el sistema operativo actual

                echo "<div class='contenedores'>";
                echo "<h3 id='nombre'>" . $sistemaOperativo->getNombre() . "</h3>";
                echo "<div id='info-detallada" . $i . "' >";
                echo "<p>Fabricante: " . $sistemaOperativo->getFabricante() . "</p>";
                echo "<p>Arquitectura: " . $sistemaOperativo->getArquitectura() . "</p>";
                echo "<p>Comunidad: " . $sistemaOperativo->getComunidad() . "</p>";
                echo "<p>Seguridad: " . $sistemaOperativo->getSeguridad() . "</p>";
                echo "<p>Última versión: " . $sistemaOperativo->getVersion() . "</p>";
                echo "<p>Dispositivos: " . $sistemaOperativo->getDispositivos() . "</p>";
                echo "</div>";
                echo "<img src='" . $sistemaOperativo->getImagen() . "' id='imagen" . $i . "' class='imagenes' width='90' height='90'/>";

                echo "<div id='comentario" . $i . "' class='comentarios'><img src='../img/comentario-alt.png' alt='' width='25' height='25' title='comentarios'></div>";
                echo "</div>";
            }
        } else {
            // El sistema operativo no se encontró o ocurrió un error
            echo $datos;
        }

        ?>
    </section>


    <footer>
        Footer
    </footer>
</body>

</html>