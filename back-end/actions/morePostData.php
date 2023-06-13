<?php 
include("../../back-end/db/db.php");

$post_id = $_POST['post_id'];

$query = "SELECT * FROM posts WHERE idPost = '$post_id'";
$SQLsequence = $conexion->prepare($query);
$SQLsequence->execute();
$selectedPost = $SQLsequence->fetch();

$SQLsequence = $conexion->prepare("SELECT * FROM users WHERE email = '".$selectedPost['email']."'");
$SQLsequence->execute();
$selectedUser = $SQLsequence->fetch();

$SQLsequence = $conexion->prepare("SELECT * FROM comments WHERE IdPost = '".$selectedPost['idPost']."'");
$SQLsequence->execute();
$commentsPost = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);
?>