<?php
$servername = "localhost";
$username = "estm";
$password = "estm";
$BD = "bd_etablissement";
$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$BD", $username, $password);
    //echo("Connexion OK");
        // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>
