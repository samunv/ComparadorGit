<?php
require_once '../Modelo/SistemaOperativo.php';
require_once '../Dao/SistemaOperativoDAO.php';
require_once '../Dao/sistemaOperativoDAOImplementar.php'; 

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['imagen'])) {

        $imagen = $_FILES['imagen'];

        $directorio = '../img/'; 

        // Mover el archivo
        if (move_uploaded_file($imagen['tmp_name'], $directorio . $imagen['name'])) {
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
                $directorio . $imagen['name'] // Ruta de la imagen
            );

            // Crear una instancia del DAO
            $soDAO = new SistemaOperativoDAOimplementar();

            // Llamar al método crearSO del DAO para insertar el nuevo sistema operativo
            $mensaje = $soDAO->subirSO($so);

            // Mostrar un mensaje al usuario
            echo $mensaje;
        } else {
            // Error al guardar la imagen
            echo "Error al guardar la imagen.";
        }
    } else {
        // No se ha recibido la imagen
        echo "No se ha recibido la imagen.";
    }
}
