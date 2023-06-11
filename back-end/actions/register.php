<?php
// the register page !!!
// here's hoping it works or something along those lines lmao

// calling the database handler
include("../../back-end/db/db.php");

$date = date('Y-m-d', time());

// añadir aqui los campos para completar la tabla users de instagram
if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['username'])) {
    $query = "INSERT INTO users (email, password, userName, birthDate, creationDate, phoneNumber, profilePic) 
    VALUES (:email, :password, :userName, :birthDate, :creationDate, :phoneNumber, :profilePic)";


    $stmt = $conexion->prepare($query);

    $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);

    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':userName', $_POST['username']);
    $stmt->bindParam(':birthDate', $_POST['date']);
    $stmt->bindParam(':creationDate', $date);
    $stmt->bindParam(':phoneNumber', $_POST['phone']);
    $stmt->bindParam(':profilePic', $_POST['profilePic']);

    if ($stmt->execute()) {
        $message = 'Successfully created new user';
        header("Location: ../../front-end/pages/login.php");

        $targetDir = '../db/uploads/profile/'; // upload directory
        $targetFile = $targetDir . basename($_FILES['imginput']['name']); // the directory+the file
        $uploadOk = 1;
        $imginputType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // this stores the extension

        // auto-generate a name for the image based on the user name
        $targetFile = $targetDir . $$_POST['username'] . '.' . $imginputType; // Generate a unique filename using the timestamp

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

    } else {
        $message = 'Sorry, there\'s been an issue creating your account';
    }
}
?>