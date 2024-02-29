<?php
session_start();
include("../../back-end/db/db.php");
$url="http://".$_SERVER['HTTP_HOST']."/tfg";

$postId = $_POST['post_id'];
$query = "DELETE FROM posts WHERE idPost = $postId";
$SQLsequence = $conexion->prepare($query);

if ($SQLsequence->execute()) {
    echo 'Message removed';
    header("Location: ".$url."/front-end/pages/profile.php");
} else {
    echo 'Sorry, there\'s been an issue removing the message';
}