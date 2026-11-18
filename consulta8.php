<?php
require 'conexion.php';
$sql = "SELECT * FROM DEPARTAMENTO WHERE Presupuesto BETWEEN 50000 AND 70000";
mostrarTabla($conexion, $sql);
?>
