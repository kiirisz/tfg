<?php
session_start();
include("../../back-end/db/db.php");
$url="http://".$_SERVER['HTTP_HOST']."/tfg";

$messageId = $_GET['remove_id'];
$query = "DELETE FROM messages WHERE id = $messageId";
$SQLsequence = $conexion->prepare($query);

if ($SQLsequence->execute()) {
    echo 'Message removed';
    header("Location: ".$url."/front-end/pages/messages.php");
} else {
    echo 'Sorry, there\'s been an issue removing the message';
}