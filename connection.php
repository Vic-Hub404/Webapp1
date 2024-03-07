<?php


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=restaurant", $username, $password);
    // set the PDO error mode to exception
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users");
$stmt->execute();

$results = $stmt->fetchALL();

