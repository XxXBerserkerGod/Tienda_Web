<?php
// Incluir la librería Dompdf

include '../../../Modelo/conexion.php';
require '../../../vendor/autoload.php';

use Dompdf\Dompdf;
$dompdf = new Dompdf();

$sql = "SELECT *,p.descripcion as desc_prod ,ep.descripcion as n_estado 
from marca m inner join producto p ON
m.id_marca=p.id_producto inner join categoria cat ON
p.id_categoria=cat.id_categoria inner join estado_producto ep ON
p.codigo_estado=ep.codigo_estado
where ep.descripcion in ('Oferta','Bueno','Deteriorado','Caducado')
order by p.id_producto asc";
$resultado = $conn->query($sql);

// Crear el contenido del PDF con la tabla y los datos de la consulta
$contenido = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Usuarios</title>
    <style>
      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
      }
    
      .logo {
        width: 120px;
        height: 10px;
      }
    
      .report-title {
        flex-grow: 1;
        text-align: center;
        margin: 0;
        font-size: 24px;
        color: #007bff;
      }
    
      .fecha {
        text-align: right;

      }
    
      .fecha-text {
        margin: 0;

      }

      .company-info {
        font-weight: bold;
      }

      .table {
        width: 100%;
        border-collapse: collapse;
      }

      .table th,
      .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
      }

      .table th {
        background-color: #f0f0f0;
      }

      .table td:first-child {
        width: 5%;
      }

      .table td:nth-child(2){
        width: 15%;
      }
      .table td:nth-child(3),
      .table td:nth-child(4){
        width: 10%;
      }
      .table td:nth-child(5),
      .table td:nth-child(6){
        width: 10%;
      }
      .table td:nth-child(5),
      .table td:nth-child(6),
      .table td:nth-child(7),
      .table td:nth-child(8){
        width: 10%;
      }
      @page {
        size: landscape;
      }
    </style>
</head>
<body>
  <div class="container">
    <!-- Fila para el logo, fecha y título -->
    <div class="header">
  <h3 class="report-title">Reporte de Productos</h3>
  <div class="fecha">
    <p class="fecha-text">Fecha: ' . date("Y-m-d") . '</p>
  </div>
</div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <p class="company-info">Nombre de la Empresa:</p>
        <p>Bazar Perfumeria Janet</p>
      </div>
    </div>
    
    <div class="row mt-3">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>Producto</th>
              <th>Precio</th>
              <th>Stock</th>
              <th>Marca</th>
              <th>Categoria</th>
              <th>Precio Oferta</th> 
              <th>Estado</th> 
            </tr>
          </thead>
          <tbody>';

while ($fila = $resultado->fetch_assoc()) {
  $contenido .= '<tr>';
  $contenido .= '<td>' . $fila['id_producto'] . '</td>';
  $contenido .= '<td>' . $fila['nombre_producto'] . '</td>';
  $contenido .= '<td>' . $fila['precio_producto'] . '</td>';
  $contenido .= '<td>' . $fila['stock'] . '</td>';
  $contenido .= '<td>' . $fila['nombre_marca'] . '</td>';
  $contenido .= '<td>' . $fila['nombre_categoria'] . '</td>';
  $contenido .= '<td>' . $fila['precio_oferta'] . '</td>';
  $contenido .= '<td>' . $fila['n_estado'] . '</td>';
  $contenido .= '</tr>';
}

$contenido .= '</tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>';

// Cargar el contenido HTML al objeto Dompdf
$dompdf->loadHtml($contenido);

//$dompdf->setPaper('A4', 'portrait');
$dompdf->setPaper('landscape', 'A4');

// Renderizar el PDF
$dompdf->render();

// Enviar el PDF al navegador
$dompdf->stream("reporteproductos.pdf", array('Attachment' => '0'));
