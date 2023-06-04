<?php
include("../../back-end/db/db.php");

// all this is alberto's code, which i'm leaving here in case we need it 

/* $accion = 'asasa';
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
 */


 if (isset($_FILES['imginput'])) {
    // echo "traza";

    $targetDir = '../db/uploads/';                                          // upload directory
    $targetFile = $targetDir . basename($_FILES['imginput']['name']);      // the directory+the file
    $uploadOk = 1;
    $imginputType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // this stores the extension

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES['imginput']['tmp_name']);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // TODO: make it so image names are substituted with a generated numeric ID
    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "File already exists.";
        $uploadOk = 0;
    }

    // Check file size (needed, if we want to account for people being silly)
    if ($_FILES['imginput']['size'] > 10000000) {   // 10mb
        echo "File is too large.";
        $uploadOk = 0;
    }

    // Allow only specific file formats
    $allowedFormats = array('jpg', 'jpeg', 'png');
    if (!in_array($imginputType, $allowedFormats)) {           // checking if the format is allowed
        echo "Only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // If all checks pass, move the uploaded file to the target directory
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['imginput']['tmp_name'], $targetFile)) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error uploading the image.";
        }
    }
}

// TODO: save the image ID and other data on the database
?>