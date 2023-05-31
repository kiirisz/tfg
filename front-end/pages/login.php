<!DOCTYPE html>   <!-- this closes on the php file -->
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

        <main class="h-screen  w-full flex flex-col items-center bg-gradient-to-br from-pink-500 to-blue-500">

            <div class="text-slate-800 bg-slate-200 flex flex-col items-center text-center my-auto px-5 rounded-md p-5">

                <form action="" method="post" class="my-auto">
                    <label for="username" class="text-2xl">Username</label><br>
                    <input type="text" name="username" id="username" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br><br>

                    <label for="pass" class="text-2xl">Password</label><br>
                    <input type="password" name="pass" id="pass" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br><br>

                    <input type="submit" value="Log In"
                        class="bg-pink-500 hover:bg-pink-900 transition ease-in-out text-white p-2 font-bold rounded-md"
                    >

                </form>

            </div>

<?php include("../template/footer.php"); ?>