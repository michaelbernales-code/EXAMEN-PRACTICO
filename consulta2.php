<?php
require 'conexion.php';
$sql = "SELECT * FROM EMPLEADOS";
mostrarTabla($conexion, $sql);
?>
