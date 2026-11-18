<?php
require 'conexion.php';
$sql = "SELECT * FROM EMPLEADOS WHERE Clave_Depto IN (1, 3) ORDER BY Nombre ASC";
mostrarTabla($conexion, $sql);
?>
