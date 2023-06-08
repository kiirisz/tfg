<?php
include("../../back-end/db/db.php");
var_dump("asasdasdasdasd");

$date = date('Y-m-d', time());
$seen = 0;

if (isset($_POST['userRecipient']) && isset($_POST['userSender']) && isset($_POST['username'])) {
    $query = "INSERT INTO messages (userRecipient, userSender, subject, message, seen, date) 
    VALUES (:userRecipient, :userSender, :subject, :message, :seen, :date)";

    $SQLsequence = $conexion->prepare($query);
    $SQLsequence->bindParam(':userRecipient', $_POST['userRecipient']);
    $SQLsequence->bindParam(':userSender', $_POST['userSender']);
    $SQLsequence->bindParam(':subject', $_POST['subject']);
    $SQLsequence->bindParam(':message', $_POST['message']);
    $SQLsequence->bindParam(':date', $date);
    $SQLsequence->bindParam(':seen', $seen);

    $SQLsequence->execute();

    if ($SQLsequence->execute()) {
        echo 'Successfully created new user';
    } else {
        echo 'Sorry, there\'s been an issue creating your account';
    }
}