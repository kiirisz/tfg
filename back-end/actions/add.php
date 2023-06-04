<?php
include("../../back-end/db/db.php");

$accion = 'asasa';
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch ($accion) {
    case 'Agregar':
        $idPost=(isset($_POST['idPost']))?$_POST['idPost']:"";
        $userEmail=(isset($_POST['userEmail']))?$_POST['userEmail']:"";
        $postImage=(isset($_FILES['postImage']['name']))?$_FILES['postImage']['name']:"";
        $postCaption=(isset($_POST['postCaption']))?$_POST['postCaption']:"";
        $postLikes=(isset($_POST['postLikes']))?$_POST['postLikes']:"";
        $postUploadDate=(isset($_POST['postUploadDate']))?$_POST['postUploadDate']:"";
        $postCommentsNumber=(isset($_POST['postCommentsNumber']))?$_POST['postCommentsNumber']:"";

        // Sequence to start database
        $sentenciaSQL = $conexion->prepare("INSERT INTO Posts (email, caption, likes, images, uploadDate, commentsNumber) VALUES (:email,:caption,:likes,:images,:uploadDate,:commentsNumber);");

        $date = new DateTime();
        // In case there are more than one document with the same name
        $nombreArchivo = ($postImage!="")?$date->getTimestamp()."_".$_FILES["postImage"]["idPost"]:["image.jpg"];

        
        $tmpImagen=$_FILES["nombreArchivo"];

        if ($tmpImagen!="") {
            move_uploaded_file($tmpImagen["name"],"img/".$nombreArchivo[0]);
            var_dump($tmpImagen["name"]);
            var_dump("img/".$nombreArchivo[0]);
            var_dump(move_uploaded_file($tmpImagen["name"],"../../img/".$nombreArchivo[0]));
        }

        $postUploadDate = $date->format('y-m-d');
        $postCommentsNumber = 0;
        
        //Remove this and replace it with the email from the session of the user
        $userEmail = 'test@gmail';

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