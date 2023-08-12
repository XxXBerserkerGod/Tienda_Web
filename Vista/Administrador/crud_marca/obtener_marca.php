<?php
include_once '../../../Modelo/conexion.php';
if (isset($_POST["idmarca"])) {
    $idmarca = $_POST['idmarca'];
    $sqlop = "SELECT *
    from marca
    where id_marca   = $idmarca;";
    $result = $conn->query($sqlop);
    if ($result->num_rows > 0) {
        $prod= $result->fetch_assoc();
        echo json_encode($prod);
    } else {
        echo json_encode(['error' => 'Marca no encontrada']);
    }
} else {
    echo json_encode(['error' => 'ID Invalido']);
}

?>