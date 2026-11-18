<?php
require 'conexion.php';
$sql = "SELECT Nombre, Clave_empleado FROM EMPLEADOS WHERE Clave_Depto = 4";
mostrarTabla($conexion, $sql);
?>
