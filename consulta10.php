<?php
require 'conexion.php';
$sql = "SELECT e.Nombre, e.Apellidos, d.Nombre AS Departamento FROM EMPLEADOS e INNER JOIN DEPARTAMENTO d ON e.Clave_Depto = d.Clave_Depto";
mostrarTabla($conexion, $sql);
?>
