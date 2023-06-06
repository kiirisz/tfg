<?php 
include("../template/header.php");
include("../../back-end/actions/messageController.php");
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
        <section>
            <div class="left">
                <div class='user_image'>
                    <img src="../../img/basic_logo_dark.svg" alt="user image">
                </div>
            </div>
            <div class="right">
                <div class='user_name'>Kiiri</div>
                <div class='user_message'>TESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTESTES</div>
            </div>
        </section>
    </article>
</main>


<?php
include("../template/footer.php");?>