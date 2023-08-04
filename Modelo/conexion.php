<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perfumeria_janet";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}
