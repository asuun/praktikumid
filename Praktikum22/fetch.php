<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Siin toimub vormi töötlus";
echo "Andmed mida saame kasutada on:";
print_r($_POST);

$_POST["eesnimi"];



$servername = "localhost";
$username = "test";
$password = "t3st3r123";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



$eesnimi = $_POST["eesnimi"];
$perenimi = $_POST["perenimi"];

$sql = "INSERT INTO 000I244tabelkatse (eesnimi, perenimi)
VALUES ('$eesnimi', '$perenimi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://www.delfi.ee/");
die();
