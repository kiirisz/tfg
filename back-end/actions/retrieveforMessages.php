<?php
    $email = $_SESSION['email'];
    $SQLsequence = $conexion->prepare("SELECT * FROM messages where userRecipient = '$email'");
    $SQLsequence->execute();
    $userList = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);
    $GetAllUsers = $conexion->prepare("SELECT * FROM users");
    $GetAllUsers->execute();
    $allUsersList = $GetAllUsers->fetchAll(PDO::FETCH_ASSOC);
?>