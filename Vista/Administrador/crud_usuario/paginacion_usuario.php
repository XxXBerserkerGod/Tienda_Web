<?php 
// Paginación
$elementos_por_pagina = 7;
$total_registros = $resultadousu->num_rows;
$total_paginas = ceil($total_registros / $elementos_por_pagina);

if (isset($_GET['pagina'])) {
    $pagina_actual = $_GET['pagina'];
} else {
    $pagina_actual = 1;
}
$offset = ($pagina_actual - 1) * $elementos_por_pagina;

$sql_paginacion = "SELECT *
from ubigeo ub inner join usuario u ON
ub.id_ubigeo=u.id_ubigeo inner join tipo_usuario tu ON
u.id_tipo_usuario=tu.id_tipo_usuario
order by id_usu asc
LIMIT $elementos_por_pagina OFFSET $offset;";
$resultado_paginacion_usu = $conn->query($sql_paginacion);
