<?php
include("../../back-end/db/db.php");

$timestamp = time(); // Get the current timestamp 

// this receives the image, makes all pertinent checks, renames it and throws it into the folder
if (isset($_FILES['imginput'])) {

    $targetDir = '../db/uploads/'; // upload directory
    $targetFile = $targetDir . basename($_FILES['imginput']['name']); // the directory+the file
    $uploadOk = 1;
    $imginputType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // this stores the extension

    // auto-generate a name for the image based on the current time
    $targetFile = $targetDir . $timestamp . '.' . $imginputType; // Generate a unique filename using the timestamp



    // Check if the uploaded file is an image
    $check = getimagesize($_FILES['imginput']['tmp_name']);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (needed, if we want to account for people being silly)
    if ($_FILES['imginput']['size'] > 10000000) { // 10mb
        echo "File is too large.";
        $uploadOk = 0;
    }

    // Allow only specific file formats
    $allowedFormats = array('jpg', 'jpeg', 'png');
    if (!in_array($imginputType, $allowedFormats)) { // checking if the format is allowed
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

    $date = date('Y-m-d', $timestamp);
    $images = $timestamp . '.' . $imginputType;
    $caption = $_POST['caption'];
    session_start();
    $email = $_SESSION['email'];

    // NOTE: idPost is omitted because it's meant to be auto-assigned by sql
    $insertImage = "INSERT INTO `posts` (`images`, `caption`, `likes`, `email`, `uploadDate`, `commentsNumber`) VALUES (             
    :images, 
    :caption, 
    '0', 
    :email, 
    :uploadDate, 
    '0'
    ) 
";

    // bindings
    $sentenciaSQL = $conexion->prepare($insertImage);

    $sentenciaSQL->bindParam(':images', $images);
    $sentenciaSQL->bindParam(':caption', $caption);
    $sentenciaSQL->bindParam(':email', $email);
    $sentenciaSQL->bindParam(':uploadDate', $date);


    $sentenciaSQL->execute();

    // Redirect the user to profile page
    header("Location: ../../front-end/pages/galeria.php");
    exit;
}

?>
