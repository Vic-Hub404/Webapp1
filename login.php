<?php
include 'connection.php';


$user = $_POST[''];




$stmt = $conn->prepare(
    "SELECT gebruikersnaam, wachtwoord FROM users WHERE gebruikersnaam='$user'");
$stmt->execute();

$result = $stmt ->fetch();



if (isset($result)){
    echo 'klopt';
}
else{
    echo 'niet';
}
