<?php

$Identificacion = $_POST['Identificacion'];
$NomApellidos = $_POST['NomApellidos'];
$Cargo = $_POST['Cargo'];
$Salario = $_POST['Salario'];

echo "<h2>Información del Empleado</h2>";

echo "La identificación del empleado es: <b>$Identificacion</b><br>";
echo "Los nombres y apellidos del empleado son: <b>$NomApellidos</b><br>";
echo "El cargo del empleado es: <b>$Cargo</b><br>";
echo "El salario del empleado es: <b>$Salario</b><br>";

?>
