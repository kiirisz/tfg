<?php

// Require the database connection file
include("../../back-end/db/db.php");

// Check if the userName and password fields are not empty
if (isset($_POST['username']) && isset($_POST['pass'])) {

  // Prepare and execute the SQL query to fetch user details based on userName
  $records = $conexion->prepare('SELECT idUser, userName, password FROM users WHERE userName = :userName');
  $records->bindParam(':userName', $_POST['username']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  // Check if a user with the provided userName exists and if the password matches
  if (count($results) > 0 && password_verify($_POST['pass'], $results['password'])) {
    // If the credentials match, set the user's ID in the session and redirect to the desired location
    $_SESSION['user_id'] = $results['idUser'];
    $_SESSION['username'] = $results['userName'];

    // TODO: point to homepage
    header("Location: ../../front-end/pages/profile.php");
  } else {
    // If the credentials do not match, display an error message
    echo 'Sorry, those credentials do not match';
  }
}

?>