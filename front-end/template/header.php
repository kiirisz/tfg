<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuenty</title>

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
    <main class="flex h-screen">
        <!-- this is the heading where the logo will be -->
        <header class="font-bold text-2xl bg-slate-800 text-white vertical-text h-full p-5"></header>
        <!-- this is the menu -->
        <!-- TODO: make this become amborgesa for responsivity at some point in the future -->
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="img/Logo_1_reverse.svg" alt="">
                    </span>
                    <div class="text logo-text">
                        <span class="name">Kuenty</span>
                        <span class="profession">
                        <p>For real people</p></span>
                    </div>
                </div>
                <i class='bx bx-chevron-right toggle'></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Search...">
                    </li>
                    <ul class="menu-links">
                        <li class="navbar-link">
                            <a href="/tfg">
                                <i class='bx bx-home-alt icon' ></i>
                                <span class="text nav-text">Home</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="front-end/pages/addPost.php">
                                <i class='bx bx-plus-circle icon'></i>
                                <span class="text nav-text">Add Post</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="#">
                                <i class='bx bx-bell icon'></i>
                                <span class="text nav-text">Notifications</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="front-end/pages/login.php">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">My account</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="#">
                                <i class='bx bx-heart icon' ></i>
                                <span class="text nav-text">Likes</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom-content">
                    <li class="">
                        <a href="#">
                            <i class='bx bx-log-out icon' ></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </li>
                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>  
                        <span class="mode-text text">Dark mode</span>
                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>
        <!-- JavaScript for the navbar, DO NOT MOVE FROM HERE!!!!! -->
        <script src="./front-end/js/navbar.js"></script>
        <script src="../js/navbar.js"></script>