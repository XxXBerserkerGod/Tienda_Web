<?php
include_once '../conexion/conexion.php';
if (isset($_POST["idprod"])) {
    $idprod = $_POST['idprod'];
    $sql = "select * from tb_producto where idproducto  = '$idprod'";
    $result = $conn->query($sql);

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