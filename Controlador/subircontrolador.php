<?php
require_once '../Modelo/SistemaOperativo.php';
require_once '../Modelo/SistemaOperativoDAO.php';
require_once '../Modelo/sistemaOperativoDAOImplementar.php';

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['imagen'])) {
        // Mover el archivo
        $directorio = "../img/";

        $datosImagen = $_FILES['imagen'];
        $nombre = $_POST['nombre'];
        $fabricante = $_POST['fabricante'];
        $arquitectura = $_POST['arquitectura'];
        $comunidad = $_POST['comunidad'];
        $seguridad = $_POST['seguridad'];
        $version = $_POST['version'];
        $dispositivos = $_POST['dispositivos'];
        $imagen = $directorio . $datosImagen['name']; // Ruta de la imagen
        $gratis = $_POST["gratis"];



        // La imagen se ha guardado correctamente

        // Crear un nuevo objeto so con los datos del formulario
        $so = new SistemaOperativo(
            $nombre,
            $fabricante,
            $arquitectura,
            $comunidad,
            $seguridad,
            $version,
            $dispositivos,
            $imagen,
            $gratis
        );

        // Crear una instancia del DAO
        $soDAO = new SistemaOperativoDAOimplementar();

        // Llamar al método crearSO del DAO para insertar el nuevo sistema operativo
        $mensaje = $soDAO->subirSO($so);

        // Mostrar un mensaje al usuario
        echo json_encode($mensaje);
    }
}
