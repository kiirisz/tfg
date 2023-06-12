<?php
    $email = $_SESSION['email'];
    $SQLsequence = $conexion->prepare("SELECT * FROM messages where userRecipient = '$email' && seen = 1");
    $SQLsequence->execute();
    $userListSeen = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);
    $SQLsequence = $conexion->prepare("SELECT * FROM messages where userRecipient = '$email' && seen = 0");
    $SQLsequence->execute();
    $userListNotSeen = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);
    $GetAllUsers = $conexion->prepare("SELECT * FROM users");
    $GetAllUsers->execute();
    $allUsersList = $GetAllUsers->fetchAll(PDO::FETCH_ASSOC);
?>