<?php 
// Paginación
$elementos_por_pagina = 10;
$total_registros = $resultadox->num_rows;
$total_paginas = ceil($total_registros / $elementos_por_pagina);

if (isset($_GET['pagina'])) {
    $pagina_actual = $_GET['pagina'];
} else {
    $pagina_actual = 1;
}
$offset = ($pagina_actual - 1) * $elementos_por_pagina;

$sql_paginacion = "SELECT *,p.descripcion as desc_prod ,ep.descripcion as n_estado 
from producto p inner join estado_producto ep on
        p.codigo_estado=ep.codigo_estado
order by p.id_producto asc
LIMIT $elementos_por_pagina OFFSET $offset;";
$resultado_paginacion = $conn->query($sql_paginacion);
