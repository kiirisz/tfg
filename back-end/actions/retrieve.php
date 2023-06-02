<?php
// includes
include("../../back-end/db/db.php");

// 


// Sequence to start database
// TODO: so far this is just an test but this should be replaced with actual code
$sentenciaSQL = $conexion->prepare("SELECT * FROM POSTS");
$sentenciaSQL -> execute();

// this should yoink the stuff from the sql
$posts = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


foreach ($posts as $post) {
    // this posts the image into the src of the image element, with the caption as its alt
    echo '<img src="' . $post['images'] . '" alt=" '. $post['caption'] .' " srcset="">';
}
?>