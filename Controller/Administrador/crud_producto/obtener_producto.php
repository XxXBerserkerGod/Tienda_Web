<?php
include_once '../../../Modelo/conexion.php';
if (isset($_POST["idprod"])) {
    $idprod = $_POST['idprod'];
    $sqlop = "select * from producto where id_producto =$idprod  ";
    $result = $conn->query($sqlop);
    if ($result->num_rows > 0) {
        $prod= $result->fetch_assoc();
        echo json_encode($prod);
    } else {
        echo json_encode(['error' => 'Producto no encontrado']);
    }
} else {
    echo json_encode(['error' => 'ID del Producto invalido']);
}

?>