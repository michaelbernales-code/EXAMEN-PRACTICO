<?php
require 'conexion.php';
$sql = "SELECT * FROM EMPLEADOS WHERE Apellidos = 'Lopez'";
mostrarTabla($conexion, $sql);
?>
