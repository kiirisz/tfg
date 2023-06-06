<?php 
include("../template/header.php");
include("../../back-end/db/db.php");
include("../../back-end/actions/search.php");
session_start();
?>

<?php
$email = $_SESSION['email'];
$SQLsequence = $conexion->prepare("SELECT * FROM messages where userRecipient = '$email' && seen = 0");
$SQLsequence->execute();
$userList = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="home h-full bg-slate-200 w-full flex flex-col items-center">
    <article class="header">
        <section>
            <header class="text">
                <input type="text" id="search" placeholder="Search here" />
            </header>
        </section>
        <div>
            <div id="display"></div>
        </div>
    </article>
    <h3 class="text">Your messages</h3>
    <article class="main">
        <?php foreach($userList as $users){ ?>
            
        <?php if ($users['seen'] == 0) {?>
            <section class="not-seen">
        <?php }else if ($users['seen'] == 1) {?>
            <section class="seen">
        <?php } ?>

            <div class="left">
                <div class='user_image'>
                    <img src="../../img/basic_logo_dark.svg" alt="user image">
                </div>
            </div>
            <div class="right">
                <div class='user_name' id="user_name"><?php echo $users['userSender']; ?></div>

                <?php if ($users['seen'] == 0) {?>
                    <button class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md m-3" onclick="showMessage()">Read message</button>
                <?php }else if ($users['seen'] == 1) {?>
                    <div class='user_message'><?php echo $users['message']; ?></div>
                <?php } ?>
            </div>
        </section>
        <?php } ?>
    </article>
</main>

<script>
    function showMessage() {
        document.getElementById("user_name").insertAdjacentHTML("afterend","<div class='user_message'> <?php echo $users['message']; ?> </div>");
        $users['seen'] = 1;
    }
</script>

<?php
include("../template/footer.php");?>