<?php
include_once '../../../Modelo/conexion.php';
if (isset($_POST["idcat"])) {
    $idcat = $_POST['idcat'];
    $sqlop = "SELECT *
    from categoria
    where id_categoria  = $idcat;";
    $result = $conn->query($sqlop);
    if ($result->num_rows > 0) {
        $prod= $result->fetch_assoc();
        echo json_encode($prod);
    } else {
        echo json_encode(['error' => 'Categoria no encontrada']);
    }
} else {
    echo json_encode(['error' => 'ID Invalido']);
}

?>