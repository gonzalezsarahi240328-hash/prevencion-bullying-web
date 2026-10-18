<?php
$host = "localhost";
$dbname = "prevencion_bullying";
$user = "root";
$password = "L";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    exit("No fue posible conectar con la base de datos.");
}
?>