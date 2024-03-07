<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=restaurant", $username, $password);
    // set the PDO error mode to exception
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$stmt = $conn->prepare("SELECT gebruikersnaam, wachtwoord FROM users");
$stmt->execute();

$results = $stmt->fetchALL();

?>

<html>
<head>

</head>
<body>

<?php
foreach ($results as $row){
     '<h1>'. $row ["gebruikersnaam"]. '</h1>';
     '<h3>'. $row ["wachtwoord"]. '</h3>';
}
?>

</body>
<h1>Register</h1>
<form action="register.php" method="POST">
<input type="text" name="username" placeholder="Please fill your name in">
    <input type="password" name="password" placeholder="Please fill your password in">
    <input type="submit" value="Submit">
</form>

<h1>Log in</h1>
<form action="login.php" method="GET">
    <input type="text" name="username" placeholder="Please fill your name in">
    <input type="password" name="password" placeholder="Please fill your password in">
    <input type="submit" value="Submit">
</form>
<footer>

</footer>
</html>
