<?php
include ('global/sesiones.php');
include ('global/conexion.php');

echo "Hola soy panel en modulos";

/* Total Ventas y Total de Ingresos */
    $sentenciaSQL=$pdo->prepare("SELECT count(*) totalVentas,SUM(Total) as IngresosTotalVentas FROM `tblventas` WHERE PaypalDatos<>'' ");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    $totalVentas=$registro['totalVentas'];
    $ingresosTotalVentas=$registro['IngresosTotalVentas'];

    /* Sentencia de Pendientes */

    $sentenciaSQL=$pdo->prepare("SELECT count(*) totalVentas FROM `tblventas` WHERE PaypalDatos='' ");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    $totalVentasPendientes=$registro['totalVentas'];
?>