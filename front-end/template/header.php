<?php include("head.php"); ?>

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
                        <img class="opened" src="<?php echo $url;?>/img/vertical_logo.svg" alt="">
                        <img class="closed" src="<?php echo $url;?>/img/horizontal_logo.svg" alt="">
                        <img class="opened dark" src="<?php echo $url;?>/img/vertical_logo_dark.svg" alt="">
                        <img class="closed dark" src="<?php echo $url;?>/img/horizontal_logo_dark.svg" alt="">
                        </span>
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
                            <a href="<?php echo $url;?>/index.php">
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
                            <a href="#">
                                <i class='bx bx-bell icon'></i>
                                <span class="text nav-text">Notifications</span>
                            </a>
                        </li>
                        <li class="navbar-link">
                            <a href="<?php echo $url;?>/front-end/pages/login.php">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">My account</span>
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
        <script src="<?php echo $url;?>/front-end/js/navbar.js"></script>