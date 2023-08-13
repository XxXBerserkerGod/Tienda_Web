<?php
include('../../Modelo/conexion.php');

$busqueda = $_POST['busqueda'];

$sql = "SELECT * FROM producto
        WHERE nombre_producto LIKE '%$busqueda%'";
$resultados = $conn->query($sql);

if ($resultados->num_rows > 0) {
    $output  = array();
    while ($resultado = $resultados->fetch_assoc()) {
        $output[] = $resultado;
    }
    echo json_encode($output);
} else {
    echo json_encode(array());
}
