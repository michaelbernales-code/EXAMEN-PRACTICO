<?php
// conexion.php
$conexion = new mysqli('localhost', 'root', '', 'PERSONAL');
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
$conexion->set_charset('utf8mb4');

function mostrarTabla($conexion, $sql) {
    $resultado = $conexion->query($sql);
    echo "<table border='1' cellpadding='6' cellspacing='0'><tr>";
    foreach ($resultado->fetch_fields() as $campo) {
        echo '<th>' . $campo->name . '</th>';
    }
    echo '</tr>';
    while ($fila = $resultado->fetch_row()) {
        echo '<tr>';
        foreach ($fila as $dato) { echo '<td>' . $dato . '</td>'; }
        echo '</tr>';
    }
    echo '</table>';
}
?>
