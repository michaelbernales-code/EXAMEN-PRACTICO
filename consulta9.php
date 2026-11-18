<?php
require 'conexion.php';
$sql = "SELECT e.Clave_empleado, e.Nombre, e.Apellidos FROM EMPLEADOS e INNER JOIN DEPARTAMENTO d ON e.Clave_Depto = d.Clave_Depto WHERE d.Nombre = 'Contabilidad'";
mostrarTabla($conexion, $sql);
?>
