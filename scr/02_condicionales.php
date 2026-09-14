<?php

namespace GityPhp;
use DateTime;

//Se establece la zona horaria que uno quiere
date_default_timezone_set("America/Bogota");

$NombrePagina = "Pruebas PhP";
$Costo = 20000;
$FechaX = new DateTime('2025-02-28 08:30:00'); // Febrero 28, 2025, 8:30 am
$FechaHoy = date("F j, Y, g:i a") . "\n"; // Fecha para hoy con el timezone de bogota

$condicionalIf = true; //es un boleano que es true o false
$estado = $condicionalIf ? "ACTIVO" : "NEGADO";

$nivel = 3;
$estadoAlcanzado = "";

switch ($nivel) {
    case 1:
        $estadoAlcanzado = "Bajo";
        break;
    case 2:
        $estadoAlcanzado = "Medio";
        break;
    case 3:
        $estadoAlcanzado = "Alto";
        break;
    default:
        $estadoAlcanzado = "Desconocido";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $NombrePagina ?></title>
</head>

<body>
    <h1>Curso de <?= $NombrePagina ?></h1>
    <h2>Hoy es: <?= $FechaHoy ?></h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit aliquid amet possimus voluptatem qui nesciunt eos repellat sit enim similique dolor in culpa vitae inventore ut hic, incidunt explicabo maxime!</p>
    <h2>Cuesta: <?= number_format($Costo, 0, ',', '.') ?> </h2>
    <p>HORA REALIZADA DE ESTE CURSO: <?= $FechaX->format('d/m/Y h:i A') ?></p>
    <!--
    Se utiliza el Format para indicarle el tipo de fecha que estamos utilizando
    Si es d=dia, m=mes, Y=año, h=hora, i=Minutos, A=pm o am
    -->
    <!-- 
    //<?php if ($condicionalIf): ?>
        <p>ACTIVO</p>
    //<?php else: ?>
        <p>NEGADO</p>    
    //<?php endif; ?>
    -->
    <p>El acceso al curso es <?= $estado ?>.</p>

    <p>Tu nivel es <?= $estadoAlcanzado ?></p>
</body>

</html>