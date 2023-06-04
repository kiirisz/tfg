<?php
// includes
include("../../back-end/db/db.php");

// Sequence to start database
// TODO: so far this is just an test but this should be replaced with actual code
$sentenciaSQL = $conexion->prepare("SELECT * FROM POSTS WHERE email='kiiri@kuenty.com'");
$sentenciaSQL -> execute();

// this should yoink the stuff from the sql
$posts = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>