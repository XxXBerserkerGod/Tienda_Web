<?php 
// Paginación
$sqlcat = "SELECT *
from categoria
order by id_categoria  asc ;";
$resultadocat = $conn->query($sqlcat);

$elementos_por_pagina = 10;
$total_registros = $resultadocat->num_rows;
$total_paginas = ceil($total_registros / $elementos_por_pagina);

if (isset($_GET['pagina'])) {
    $pagina_actual = $_GET['pagina'];
} else {
    $pagina_actual = 1;
}
$offset = ($pagina_actual - 1) * $elementos_por_pagina;

$sql_paginacion = "SELECT *
from categoria
order by id_categoria  asc 
LIMIT $elementos_por_pagina OFFSET $offset;";
$resultado_paginacion_cat = $conn->query($sql_paginacion);
