<?php

  require 'database.php';

  $message = '';
// añadir aqui los campos para completar la tabla users de instagram
//  && !empty($_POST['user_name']) && !empty($_POST['birth_date']) 
//  && !empty($_POST['creation_date']) && !empty($_POST['phone_number'])) 
// , userName, birthDate, creationDate, phoneNumber
  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['userName'])) {
    $sql = "INSERT INTO users (email, password, userName) 
    VALUES (:email, :password, :userName)";
    

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':userName', $_POST['userName']);
    
    // $stmt->bindParam(':birth_date', $_POST['birthDate']);
    // $stmt->bindParam(':creation_date', $_POST['creationDate']);
    // $stmt->bindParam(':phone_number', $_POST['phoneNumber']);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
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

    <!-- <?php require 'partials/header.php' ?> -->
    <main class="h-screen  w-full flex flex-col items-center bg-gradient-to-br from-pink-500 to-blue-500">
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>
    <div class="text-slate-800 bg-slate-200 flex flex-col items-center text-center my-auto px-5 rounded-md p-5">
    <form action="signup.php" method="POST">
      <label for="email" class="text-2xl mt-1">Email</label><br>
      <input name="email" type="text"  class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out p-1"><br>
      
      <label for="password" class="text-2xl mt-1">Password</label><br>
      <input name="password" type="password" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br>
      <input name="confirm_password" type="password" placeholder="Confirm Password" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br>
      
      <label for="userName" class="text-2xl p-3">UserName</label><br>
      <input name="userName" type="text" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out"><br>
      <!-- Añadir aqui los campos que necesite
      <input name="birth_date" type="date" placeholder="Enter your birth date">
      <input name="creation_date" type="date" placeholder="Enter your birth date">
      <input name="phone_number" type="tel" placeholder="Enter your phone number"> -->
      <!--  -->
      <input type="submit" value="Submit" class="bg-pink-500 hover:bg-pink-900 transition ease-in-out text-white p-2 font-bold rounded-md mt-3">
    </form>
    </div>
    </main>
  </body>
</html>
