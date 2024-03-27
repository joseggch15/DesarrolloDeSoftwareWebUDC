<?php
// /models/db/DatabaseConnection.php

class DatabaseConnection {
    private $servername = "127.0.0.1";
    private $username = "tu_usuario";
    private $password = "tu_contraseña";
    private $dbname = "CensoPoblacion";
    private $port = 3306;  // Puerto predeterminado de MySQL
    private $conn;

    public function __construct() {
        // Intentar establecer la conexión en el constructor
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname, $this->port);
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
