<?php
class Database {
    private $host = "localhost";
    private $dbname = "bas 1";
    private $username = "root";
    private $password = "";

    private $conn;

    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Connectie mislukt: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>