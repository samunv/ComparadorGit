<?php
require_once '../Modelo/SistemaOperativo.php';
require_once '../Modelo/SistemaOperativoDAO.php';
require_once '../Modelo/sistemaOperativoDAOImplementar.php';

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['imagen'])) {

        $imagen = $_FILES['imagen'];

        // Mover el archivo
        $directorio = "../img/"; 

        // La imagen se ha guardado correctamente

        // Crear un nuevo objeto so con los datos del formulario
        $so = new SistemaOperativo(
            $_POST['nombre'],
            $_POST['fabricante'],
            $_POST['arquitectura'],
            $_POST['comunidad'],
            $_POST['seguridad'],
            $_POST['version'],
            $_POST['dispositivos'],
            $directorio . $imagen['name'], // Ruta de la imagen
            $_POST["gratis"]
        );

        // Crear una instancia del DAO
        $soDAO = new SistemaOperativoDAOimplementar();

        // Llamar al método crearSO del DAO para insertar el nuevo sistema operativo
        $mensaje = $soDAO->subirSO($so);

        // Mostrar un mensaje al usuario
        echo json_encode($mensaje);
    }
}
