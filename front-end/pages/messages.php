<?php 
include("../template/header.php");
include("../../back-end/db/db.php");
include("../../back-end/actions/search.php");
session_start();
?>

<?php
$email = $_SESSION['email'];
$element = 1;
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
                <div class='user_name' id="user_name_<?php echo($element) ?>"><?php echo $users['userSender']; ?></div>

                <?php if ($users['seen'] == 0) {?>
                    <button id="read_button" class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md m-3">Read message</button>
                <?php }else if ($users['seen'] == 1) {?>
                    <div class='user_message_<?php echo($element) ?>'><?php echo $users['message']; ?></div>
                <?php } ?>
            </div>
        </section>
        <?php $element = $element+1; } ?>
    </article>
</main>

<script>
    function showMessage(evento) {
        document.getElementById("user_name_2").insertAdjacentHTML("afterend","<div class='user_message_<?php echo($element-1) ?>'> <?php echo $users['message']; ?> </div>");
        button = document.getElementById("read_button_2");
        button.remove();
    }

    function asignarEventos(evento){
        if (document.readyState == 'complete') {
            var botonesNumeros = document.querySelectorAll('read_button');
            for(let i=0;i<botonesNumeros.length;i++){
                botonesNumeros[i].addEventListener('click',showMessage);
            }
        }
    }

    document.addEventListener("readystatechange", asignarEventos());
</script>

<?php
include("../template/footer.php");?>