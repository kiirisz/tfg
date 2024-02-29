<?php
session_start();
include("../../back-end/db/db.php");
$url="http://".$_SERVER['HTTP_HOST']."/tfg";

$name = $_SESSION['username'];

if (isset($_POST['commentMessage']) &&$_POST['commentMessage']!="" && isset($_POST['IdPost']) && isset($name)) {
    $query = "INSERT INTO comments (user, message, IdPost) 
    VALUES (:user, :message, :IdPost)";

    $SQLsequence = $conexion->prepare($query);
    
    $SQLsequence->bindParam(':user', $name);
    $SQLsequence->bindParam(':message', $_POST['commentMessage']);
    $SQLsequence->bindParam(':IdPost', $_POST['IdPost']);

    if ($SQLsequence->execute()) {
        echo 'Message sent';
        header("Location: ".$url."/front-end/pages/galeria.php");
    } else {
        echo 'Sorry, there\'s been an issue sending the message';
    }
}