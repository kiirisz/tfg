<!DOCTYPE html>
<html lang="en">
<head>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/tfg" ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuenty</title>
    <link rel="icon" href="<?php echo $url;?>/img/logo.svg" type="image/icon type">

    <!-- ooo the world wide web is out there oooo -->
    <link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo $url;?>/front-end/css/header.css" />
    <link rel="stylesheet" href="<?php echo $url;?>/front-end/css/footer.css" />
    <link rel="stylesheet" href="<?php echo $url;?>/front-end/dist/mainCss.css">
    <link rel="stylesheet" href="<?php echo $url;?>/front-end/css/messages.css">
    <link rel="stylesheet" href="<?php echo $url;?>/front-end/css/grid-gallery.css" />
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>/front-end/js/search.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>/front-end/js/dselect.js"></script>
</head>

<body class="font-dmono ">
    <main class="flex h-screen">
        <!-- this is the heading where the logo will be -->
        <header class="navbar-background font-bold text-2xl bg-800 text-white vertical-text h-full p-5 close"></header>
        <!-- this is the menu -->
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <a href="<?php echo $url;?>/front-end/pages/galeria.php">
                            <img class="logo_dark" src="<?php echo $url;?>/img/logo.svg" alt="Kuenty Logo">
                            <img class="logo_basic" src="<?php echo $url;?>/img/logo_basic.svg" alt="Kuenty Logo">
                        </a>
                    </span>
                </div>
                <i class='bx bx-chevron-right toggle'></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <div>
                        <div id="display" class="text"></div>
                    </div>
                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <div>
                            <section>
                                <header class="text">
                                    <input type="text" id="search" placeholder="Search.." />
                                </header>
                            </section>
                        </div>
                    </li>
                    <ul class="menu-links">
                        <li class="navbar-link">
                            <a href="<?php echo $url;?>/front-end/pages/galeria.php">
                                <i class='bx bx-home-alt icon' ></i>
                                <span class="text nav-text">Home</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="<?php echo $url;?>/front-end/pages/addPost.php">
                                <i class='bx bx-plus-circle icon'></i>
                                <span class="text nav-text">Add Post</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="<?php echo $url;?>/front-end/pages/messages.php">
                                <i class='bx bx-chat icon'></i>
                                <span class="text nav-text">Messages</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="<?php echo $url;?>/front-end/pages/profile.php">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">My account</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom-content">
                    <li class="">
                        <a href="<?php echo $url;?>/back-end/actions/logout.php">
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
                            <span class="switch">
                                <!--<i class='bx bxs-sun bx-xs' id="sun-icon"></i>
                                <i class='bx bxs-moon bx-xs' id="moon-icon"></i>-->
                            </span>
                        </div>
                    </li>
                </div>
                <div>
                    <p class="text nav-text copyright">©2023 <span class="page-name">Kuenty</span> <br>All Rights Reserved</p> 
                </div>
            </div>
        </nav>
        <!-- JavaScript for the navbar, DO NOT MOVE FROM HERE!!!!! -->
        <script src="<?php echo $url;?>/front-end/js/navbar.js"></script>