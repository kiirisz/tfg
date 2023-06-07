<?php 
include("../template/header.php");
include("../../back-end/db/db.php");
include("../../back-end/actions/search.php");
?>

<?php
$email = $_SESSION['email'];
$SQLsequence = $conexion->prepare("SELECT * FROM messages where userRecipient = '$email'");
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
                <div class='userName_<?php echo $users['id'] ?>' id="userName"><?php echo $users['userSender']; ?></div>
            <?php if ($users['seen'] == 0) {?>
                <div id="NoShow" class='user_message_<?php echo $users['id'] ?>'><?php echo $users['message']; ?></div>
                <button id="readButton_<?php echo $users['id'] ?>" class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md m-3">Read message</button>
            <?php }else if ($users['seen'] == 1) {?>
                <div id="Show" class='userMessage_<?php echo $users['id'] ?>'><?php echo $users['message']; ?></div>
            <?php } ?>
            </div>
        </section>
        <?php } ?>
    </article>
</main>
<script src="../js/messages.js">
    <?php
        include("../../back-end/actions/updateSeen.php");
    ?>
</script>

<?php
include("../template/footer.php");?>