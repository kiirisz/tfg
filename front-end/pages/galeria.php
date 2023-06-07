<!DOCTYPE html>
<html lang="en">
<head>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/tfg" ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuenty</title>
    <link rel="icon" href="<?php echo $url;?>/img/logo.svg" type="image/icon type">

    <link rel="stylesheet" href="grid-gallery.css" />

    <!-- ooo the world wide web is out there oooo -->
    <link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo $url;?>/front-end/dist/output.css">
    <link rel="stylesheet" href="<?php echo $url;?>/front-end/dist/mainCss.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="font-dmono" style="height: 0px">
    <main class=" h-screen" style="height: 0px">
        <!-- this is the heading where the logo will be -->
        <header class="font-bold text-2xl bg-slate-800 text-white vertical-text h-full p-5"></header>
        <!-- this is the menu -->
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <a href="<?php echo $url;?>/index.php">
                            <img class="" src="<?php echo $url;?>/img/logo.svg" alt="">
                        </a>
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
                            <a href="<?php echo $url;?>">
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
<?php 
include("../../back-end/db/db.php");
?>

<?php

$SQLsequence = $conexion->prepare("SELECT * FROM Posts");
$SQLsequence->execute();
$postsList = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);

foreach($postsList as $posts){ ?>

    <div class="grid-container">
      <div 
        class="grid-item tall"
        style="background-image: url('<?php echo $url;?>/back-end/db/uploads/<?php echo $posts['images']; ?>')"
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/881/900/900.jpg');
        "
      ></div>

      <div
        class="grid-item wide"
        style="
          background-image: url('https://picsum.photos/id/248/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/423/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/534/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/664/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/176/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="background-image: url('https://picsum.photos/id/73/900/900.jpg')"
      ></div>
      <div
        class="grid-item tall wide"
        style="
          background-image: url('https://picsum.photos/id/806/900/900.jpg');
        "
      ></div>
      <div class="grid-item"
      style="background-image: url('<?php echo $url;?>/back-end/db/uploads/<?php echo $posts['images']; ?>')">
      </div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/943/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/733/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/584/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/844/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/160/900/900.jpg');
        "
      ></div>
    </div>



    <div 
        class="grid-item tall"
        style="background-image: url('<?php echo $url;?>/back-end/db/uploads/<?php echo $posts['images']; ?>')"
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/881/900/900.jpg');
        "
      ></div>

      <div
        class="grid-item wide"
        style="
          background-image: url('https://picsum.photos/id/248/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/423/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/534/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/664/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/176/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="background-image: url('https://picsum.photos/id/73/900/900.jpg')"
      ></div>
      <div
        class="grid-item tall wide"
        style="
          background-image: url('https://picsum.photos/id/806/900/900.jpg');
        "
      ></div>
      <div class="grid-item"
      style="background-image: url('<?php echo $url;?>/back-end/db/uploads/<?php echo $posts['images']; ?>')">
      </div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/943/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/733/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/584/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/844/900/900.jpg');
        "
      ></div>
      <div
        class="grid-item"
        style="
          background-image: url('https://picsum.photos/id/160/900/900.jpg');
        "
      ></div>
    </div>


<?php } ?>
<!-- <footer class=" bg-gray-800 text-white p-5 text-center">
        A webpage by 
        <a href="#" id="kiiri">Ramiro Angel</a>, 
        <a href="#" id="albrt">Alberto Lagar</a> and 
        <a href="#" id="ilias">Ilias Akri</a>
</footer> -->
</body>
</html>