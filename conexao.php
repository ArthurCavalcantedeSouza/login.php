<?php
$host = 'localhost';
$db = 'Alpha';
$user = 'root';
$pass = 'P@$$w0rd';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new pdo($dsn,$user,$pass,$options);
    echo "Conexão Bem Sucedida";
} catch (\PDOException $e) {
 echo "Erro ao conectar ao banco de dados " . $e->getMessage();
}

?>
 