<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT idUser, email, password FROM users WHERE idUser = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link rel="stylesheet" href="dist/output.css">
        <link rel="stylesheet" href="dist/mainCss.css">
        <link rel="stylesheet" href="dist/output.css">
        <link rel="stylesheet" href="dist/mainCss.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
  <main class="h-screen  w-full flex flex-col items-center bg-gradient-to-br from-pink-500 to-blue-500">

    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>

      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
    </main>
  </body>
</html>