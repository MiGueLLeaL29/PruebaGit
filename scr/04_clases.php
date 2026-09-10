<?php

namespace GityPhp;
use DateTime;

//Se establece la zona horaria que uno quiere
date_default_timezone_set("America/Bogota");

class ArregloPg
{

    public function __construct(
        public String $NombrePagina,
        public String $Description,
        public Int $Costo,
        public DateTime $FechaHoy,
        public DateTime $FechaX,
        public bool $condicionalIf,
        public array $arreglos,
    ) {}
}

$datos = new ArregloPg(
    NombrePagina: "Pruebas PhP",
    Description: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit aliquid amet possimus voluptatem qui nesciunt eos repellat sit enim similique dolor in culpa vitae inventore ut hic, incidunt explicabo maxime!",
    Costo: 20000,
    FechaHoy: new DateTime(),
    FechaX: new DateTime('2025-02-28 08:30:00'),
    condicionalIf: True,
    arreglos: ["Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho"],
);

//Operador terciario
$estado = $datos->condicionalIf ? "ACTIVO" : "NEGADO";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $datos->NombrePagina ?></title>
</head>

<body>
    <h1>Curso de <?= $datos->NombrePagina ?></h1>
    <h2>Hoy es: <?= $datos->FechaHoy->format('d/m/Y h:i A') ?></h2>
    <p><?= $datos->Description ?></p>
    <h2>Cuesta: <?= number_format($datos->Costo, 0, ',', '.') ?> </h2>
    <p>HORA REALIZADA DE ESTE CURSO: <?= $datos->FechaX->format('d/m/Y h:i A') ?></p>
    <!--
    Se utiliza el Format para indicarle el tipo de fecha que estamos utilizando
    Si es d=dia, m=mes, Y=año, h=hora, i=Minutos, A=pm o am
    -->
    <p><?= $estado ?></p>
    <strong>
        <ul>
            <?php foreach ($datos->arreglos as $Escribeindividual): ?>
                <li><?= $Escribeindividual ?></li>
            <?php endforeach; ?>
        </ul>
    </strong>

</body>

</html>