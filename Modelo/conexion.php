<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Perfumeria_Janet";
$port = "3307";
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}
