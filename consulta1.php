<?php
require 'conexion.php';
$sql = "SELECT * FROM DEPARTAMENTO";
mostrarTabla($conexion, $sql);
?>
