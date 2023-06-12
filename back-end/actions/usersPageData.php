<?php
include("../../back-end/db/db.php");
$userId = $_POST['user_id'];

$SQLsequenceUser = $conexion->prepare("SELECT * FROM users where idUser = '$userId'");
$SQLsequenceUser->execute();
$userList = $SQLsequenceUser->fetchAll(PDO::FETCH_ASSOC);

foreach ($userList as $users) {
    $user = $users['email'];
    $SQLsequencePost = $conexion->prepare("SELECT * FROM posts WHERE email='$user'");
    $SQLsequencePost -> execute();
    $postList = $SQLsequencePost->fetchAll(PDO::FETCH_ASSOC);
}
?>