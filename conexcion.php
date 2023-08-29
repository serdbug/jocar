<?php
class DatabaseConnection {
    private $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jocard";

        // Crear la conexión
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

// Crear una instancia de DatabaseConnection
$dbConnection = new DatabaseConnection();

// Obtener la conexión
$conn = $dbConnection->getConnection();
?>