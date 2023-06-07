<?php
// includes
include("../../back-end/db/db.php");

// Sequence to start database
// TODO: so far this is just an test but this should be replaced with actual code
$email = $_SESSION['email'];
$sentenciaSQL = $conexion->prepare("SELECT * FROM POSTS WHERE email='$email'");
$sentenciaSQL -> execute();

// this should yoink the stuff from the sql
$posts = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>