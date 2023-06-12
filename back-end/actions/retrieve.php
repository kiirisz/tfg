<?php
// includes
include("../../back-end/db/db.php");

// Sequence to start database
$email = $_SESSION['email'];
$user = $_SESSION['username'];

// get the posts
$getposts = $conexion->prepare("SELECT * FROM POSTS WHERE email='$email'");
$getposts -> execute();

// get the pfp
$getpfp = $conexion->prepare("SELECT profilePic FROM users WHERE username='$user'");
$getpfp -> execute();


// this should yoink the stuff from the sql
$posts = $getposts->fetchAll(PDO::FETCH_ASSOC);
$pfp = $getpfp -> fetchColumn();
?>