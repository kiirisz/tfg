<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $records = $conn->prepare('SELECT idUser, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['idUser'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- ooo the world wide web is out there oooo -->
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
  <body class="font-dmono">
    <!-- <?php require 'partials/header.php' ?> -->

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <main class="h-screen  w-full flex flex-col items-center bg-gradient-to-br from-pink-500 to-blue-500">

      <h1>Login</h1>
      <span>or <a href="signup.php">SignUp</a></span>
   <div class="text-slate-800 bg-slate-200 flex flex-col items-center text-center my-auto px-5 rounded-md p-5">
      <form action="login.php" method="POST" class="my-auto">
      <label for="email" class="text-2xl mt-1">Email</label><br>
        <input name="email" type="text" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br>

        <label for="password" class="text-2xl mt-3">Password</label><br>
        <input name="password" type="password" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br>
        <input type="submit" value="Submit" class="bg-pink-500 hover:bg-pink-900 transition ease-in-out text-white p-2 font-bold rounded-md mt-3">
      </form>
    </div>
    </main>
  </body>
</html>