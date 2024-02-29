<?php
include("../../back-end/db/db.php");
$userId = $_POST['user_id'];

$SQLsequenceUser = $conexion->prepare("SELECT * FROM users where idUser = '$userId'");
$SQLsequenceUser->execute();
$user = $SQLsequenceUser->fetch();


$email = $user['email'];
$SQLsequencePost = $conexion->prepare("SELECT * FROM posts WHERE email='$email'");
$SQLsequencePost->execute();
$posts = $SQLsequencePost->fetchAll(PDO::FETCH_ASSOC);

?>