<?php
require_once "conexion.php";

    // Obtener los datos del formulario
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO personas (id, nombre, apellido, dni) VALUES ('$id', '$nombre', '$apellido','$dni')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos agregados exitosamente";
    } else {
        echo "Error al agregar datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();

?>
