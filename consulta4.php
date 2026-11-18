<?php
require 'conexion.php';
$sql = "SELECT * FROM EMPLEADOS WHERE Apellidos IN ('Lopez', 'Perez')";
mostrarTabla($conexion, $sql);
?>
