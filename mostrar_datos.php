<?php
require_once "conexcion.php";

// Consulta a la base de datos
$sql = "SELECT * FROM stock";
$result = $conn->query($sql);

// Mostrar los datos en una tabla HTML
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>cod</th><th>rubro</th><th>eq1</th><th>eq2</th><th>marca</th><th>modelo</th><th>detalle</th><th>descripcion</th><th>venta</th><th>costo</th><th>fecha</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["cod"] . "</td>";
        echo "<td>" . $row["rubro"] . "</td>";
        echo "<td>" . $row["eq1"] . "</td>";
        echo "<td>" . $row["eq2"] . "</td>";
        echo "<td>" . $row["marca"] . "</td>";
        echo "<td>" . $row["modelo"] . "</td>";
        echo "<td>" . $row["detalle"] . "</td>";
        echo "<td>" . $row["descripcion"] . "</td>";
        echo "<td>" . $row["venta"] . "</td>";
        echo "<td>" . $row["costo"] . "</td>";
        echo "<td>" . $row["fecha"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>