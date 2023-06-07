<?php
$elementId= $_COOKIE["SelectedMessage"];
if ($elementId != null) {
    $query = 'UPDATE messages SET seen = 1 WHERE id = '.$elementId.'';
    $sentenciaSQL = $conexion->prepare($query);
    $sentenciaSQL->execute();
}
?>