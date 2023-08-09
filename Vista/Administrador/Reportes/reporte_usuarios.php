<?php
// Incluir la librería Dompdf
require '../../../vendor/autoload.php';
include '../../../Modelo/conexion.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$sql = "SELECT * FROM usuario";
$resultado = $conn->query($sql);

// Crear el contenido del PDF con la tabla y los datos de la consulta
$contenido = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Usuarios</title>
    <style>
      /* Estilos para la alineación y diseño */
   

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

      .table th:first-child,
      .table td:first-child {
        width: 5%;
      }

      .table th:nth-child(2){
        width: 25%;
      }
      .table th:nth-child(3){
        width: 15%;
      }
      .table th:nth-child(4){
        width: 15%;
      }
      .table td:nth-child(5),
      .table td:nth-child(6) {
        width: 20%;
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
  <div class="logo">
    <!-- Etiqueta para el logo de la empresa -->
    <img src="/Tienda_Web/img/logo1.png" alt="logo" class="logo">
  </div>
  <h3 class="report-title">Reporte de Usuarios</h3>
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
              <th>Nombres y Apellidos</th>
              <th>Dni</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Dirección</th> 
            </tr>
          </thead>
          <tbody>';

while ($fila = $resultado->fetch_assoc()) {
  $contenido .= '<tr>';
  $contenido .= '<td>' . $fila['id_usu'] . '</td>';
  $contenido .= '<td>' . $fila['nombres_usu'] . '</td>';
  $contenido .= '<td>' . $fila['dni_usu'] . '</td>';
  $contenido .= '<td>' . $fila['telefono_usu'] . '</td>';
  $contenido .= '<td>' . $fila['correo_usu'] . '</td>';
  $contenido .= '<td>' . $fila['direccion'] . '</td>';
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

// (Opcional) Establecer las opciones de la generación del PDF, como tamaño de papel, etc.
//$dompdf->setPaper('A4', 'portrait');
$dompdf->setPaper('landscape', 'A4');

// Renderizar el PDF
$dompdf->render();

// Enviar el PDF al navegador
$dompdf->stream("reporteusuarios.pdf", array('Attachment' => '0'));
