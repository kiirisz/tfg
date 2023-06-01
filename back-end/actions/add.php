<?php
include("../../back-end/db/db.php");

$accion = 'asasa';
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch ($accion) {
    case 'Agregar':
        $idPost=(isset($_POST['idPost']))?$_POST['idPost']:"";
        $userEmail=(isset($_POST['email']))?$_POST['email']:"";
        $postImage=(isset($_FILES['images']['name']))?$_FILES['images']['name']:"";
        $postCaption=(isset($_POST['caption']))?$_POST['caption']:"";
        $postLikes=(isset($_POST['likes']))?$_POST['likes']:"";
        $postUploadDate=(isset($_POST['uploadDate']))?$_POST['uploadDate']:"";
        $postCommentsNumber=(isset($_POST['commentsNumber']))?$_POST['commentsNumber']:"";

        // Sequence to start database
        $sentenciaSQL = $conexion->prepare("INSERT INTO Posts (email, caption, likes, images, uploadDate, commentsNumber) VALUES (:email,:caption,:likes,:images,:uploadDate,:commentsNumber);");

        $date = new DateTime();
        // In case there are more than one document with the same name
        $nombreArchivo = ($postImage!="")?$date->getTimestamp()."_".$_FILES["images"]["idPost"]:["imagen.jpg"];

        $postUploadDate = $date->format('d-m-Y H:i:s');
        $postCommentsNumber = 0;

        $sentenciaSQL->bindParam(':email',$userEmail);
        $sentenciaSQL->bindParam(':images',$nombreArchivo[0]);
        $sentenciaSQL->bindParam(':caption',$postCaption);
        $sentenciaSQL->bindParam(':likes',$postLikes);
        $sentenciaSQL->bindParam(':uploadDate',$postUploadDate);
        $sentenciaSQL->bindParam(':commentsNumber',$postCommentsNumber);
        $sentenciaSQL->execute();
        break;
}


?>