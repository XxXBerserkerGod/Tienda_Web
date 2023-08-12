<?php 
// Paginación
$sqlmar = "SELECT *
from marca
order by id_marca  asc ;";
$resultadomar = $conn->query($sqlmar);

$elementos_por_pagina = 10;
$total_registros = $resultadomar->num_rows;
$total_paginas = ceil($total_registros / $elementos_por_pagina);

if (isset($_GET['pagina'])) {
    $pagina_actual = $_GET['pagina'];
} else {
    $pagina_actual = 1;
}
$offset = ($pagina_actual - 1) * $elementos_por_pagina;

$sql_paginacion = "SELECT *
from marca
order by id_marca  asc 
LIMIT $elementos_por_pagina OFFSET $offset;";
$resultado_paginacion_marca = $conn->query($sql_paginacion);
