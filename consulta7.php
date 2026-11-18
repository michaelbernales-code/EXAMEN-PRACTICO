<?php
require 'conexion.php';
$sql = "SELECT Nombre, Apellidos FROM EMPLEADOS WHERE Apellidos LIKE 'H%'";
mostrarTabla($conexion, $sql);
?>
