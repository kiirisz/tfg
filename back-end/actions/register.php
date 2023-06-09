<?php

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

    } else {
        $message = 'Sorry, there\'s been an issue creating your account';
    }
}
?>