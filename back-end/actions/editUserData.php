<?php
include("../../back-end/db/db.php");
$url="http://".$_SERVER['HTTP_HOST']."/tfg";

$date = date('Y-m-d', time());
$user = $_POST['user_id'];

// añadir aqui los campos para completar la tabla users de instagram
if (isset($_POST['email']) && isset($_POST['username'])) {
    $query = "UPDATE users SET email=:email, userName=:userName, birthDate=:birthDate, 
    creationDate=:creationDate, phoneNumber=:phoneNumber, profilePic=:profilePic, description=:description WHERE idUser = $user";

    if (isset($_FILES['profilePic'])) {
        $targetDir = '../../back-end/db/uploads/profile/'; // upload directory
        $targetFile = $targetDir . basename($_FILES['profilePic']['name']); // this points to the original file in the disk
        $uploadOk = 1;
        $imginputType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // this stores the extension
        $imageName = $_POST['username'] . '.' . $imginputType;

        // auto-generate a name for the image based on the user name
        $targetFile = $targetDir . $_POST['username'] . '.' . $imginputType; // images should be named after the profile, evidently

        // Check if the uploaded file is an image
        $check = getimagesize($_FILES['profilePic']['tmp_name']);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (needed, if we want to account for people being silly)
        if ($_FILES['profilePic']['size'] > 10000000) { // 10mb
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
            if (move_uploaded_file($_FILES['profilePic']['tmp_name'], $targetFile)) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error uploading the image.";
            }
        }

    }

    $stmt = $conexion->prepare($query);

    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':userName', $_POST['username']);
    $stmt->bindParam(':birthDate', $_POST['date']);
    $stmt->bindParam(':creationDate', $date);
    $stmt->bindParam(':phoneNumber', $_POST['phone']);
    $stmt->bindParam(':profilePic', $imageName);
    $stmt->bindParam(':description', $_POST['description']);


    if ($stmt->execute()) {
        $message = 'Successfully updated user';
        header("Location: ../../front-end/pages/profile.php");
    } else {
        $message = 'Sorry, there\'s been an issue creating your account';
    }
}
?>