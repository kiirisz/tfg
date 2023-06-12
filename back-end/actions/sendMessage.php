<?php
session_start();
include("../../back-end/db/db.php");
$url="http://".$_SERVER['HTTP_HOST']."/tfg";

$email = $_SESSION['email'];
$date = date('Y-m-d', time());
$seen = 0;
$random_int = substr(sha1(mt_rand()),17,6);

if (isset($_POST['userRecipient']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $query = "INSERT INTO messages (userRecipient, userSender, subject, message, seen, date, randomId) 
    VALUES (:userRecipient, :userSender, :subject, :message, :seen, :date, :randomId)";

    $SQLsequence = $conexion->prepare($query);
    
    $SQLsequence->bindParam(':userRecipient', $_POST['userRecipient']);
    $SQLsequence->bindParam(':userSender', $email);
    $SQLsequence->bindParam(':subject', $_POST['subject']);
    $SQLsequence->bindParam(':message', $_POST['message']);
    $SQLsequence->bindParam(':date', $date);
    $SQLsequence->bindParam(':seen', $seen);
    $SQLsequence->bindParam(':randomId', $random_int);

    if ($SQLsequence->execute()) {
        echo 'Message sent';
        header("Location: ".$url."/front-end/pages/messages.php");
    } else {
        echo 'Sorry, there\'s been an issue sending the message';
    }
}