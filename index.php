<?php
// Start the session
session_start();

// If the user is already logged in, redirect them to the desired location
if (isset($_SESSION['user_id'])) {
    // TODO: this should point to the as-yet-nonexistent home page
    header('Location: /php-login');
}
?>

<!DOCTYPE html> <!-- this closes on the php file -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ooo the world wide web is out there oooo -->
    <link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="./front-end/dist/output.css">
    <link rel="stylesheet" href="./front-end/dist/mainCss.css">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../dist/mainCss.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="font-dmono ">
    <main class=" flex">
        <main class=" md:w-1/2 w-full h-screen bg-slate-200 flex flex-col items-center text-center">
            <section class=" my-auto">
                <div>
                    <img src="img/logo.svg" alt="kuenty logo" class=" w-40 mx-auto">
                    <h1>kuenty</h1>
                </div>

                <div class=" text-center">
                    <a href="front-end/pages/login.php">
                        <div
                            class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md m-3">
                            Log In
                        </div>
                    </a>

                    <a href="front-end/pages/register.php">
                        <div
                            class=" m-3 bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md">
                            Register
                        </div>
                    </a>
                </div>
            </section>
        </main>

        <aside class=" bg-gradient-to-r from-red-500 to-yellow-500 h-screen w-1/2 hidden md:flex"></aside>

    </main>
    <?php include("./front-end/template/footer.php"); ?>