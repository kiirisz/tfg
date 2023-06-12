<?php 
include("../template/header.php");
include("../../back-end/db/db.php");
include("../../back-end/actions/search.php");
include("../../back-end/actions/retrieveforMessages.php");
include("../../back-end/actions/sendMessage.php");
?>

<script type="text/javascript" src="<?php echo $url;?>/front-end/js/dselect.js"></script>
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
    <div class="top-section">
        <div>
            <button class="sendMesage text bg-500 hover:bg-red-900 transition ease-in-out p-2 font-bold rounded-md m-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Send message</button>
            <h3 class="text">Your messages</h3>
        </div>
    </div>
    <article class="main">
        <div class="messages-container-not-seen">
        <h2 class="text">Not seen</h2>
        <?php foreach($userListNotSeen as $usersNotSeen){ ?>
            <div class="messages-container">
                <section class="not-seen">
                    <div class="left">
                        <div class='user_image'>
                            <img src="../../img/basic_logo_dark.svg" alt="user image">
                        </div>
                        <div class='userName_<?php echo $usersNotSeen['id'] ?>' id="userName"><?php echo $usersNotSeen['userSender']; ?></div>
                    </div>
                    <div class="middle">
                        <div class='subject_<?php echo $usersNotSeen['id'] ?>' id="subject"><?php echo $usersNotSeen['subject']; ?></div>
                        <div id="NoShow" class='user_message_<?php echo $usersNotSeen['id'] ?>'><?php echo $usersNotSeen['message']; ?></div>
                        <form action="../../back-end/actions/removeMessage.php" method="get">
                            <input type="hidden" value="<?php echo $usersNotSeen['id'] ?>" name="remove_id" id="remove_id">
                            <input type="submit" value="Read message" id="readButton_<?php echo $usersNotSeen['id'] ?>" class="readButton bg-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md m-3">
                        </form>
                    </div>
                    <div class="right">
                        <form action="../../back-end/actions/removeMessage.php" method="get">
                            <input type="hidden" value="<?php echo $usersNotSeen['id'] ?>" name="remove_id" id="remove_id">
                            <input type="submit" value="Remove" class="removeButton_<?php echo $usersNotSeen['id'] ?> bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md m-3">
                        </form>
                    </div>
                </section>
            </div>
        <?php } ?>
        </div>
        <div class="messages-container-seen">
        <h2 class="text">Seen</h2>
        <?php foreach($userListSeen as $usersSeen){ ?>
            <div class="messages-container">
                <section class="text seen">
                    <div class="left">
                        <div class='user_image'>
                            <img src="../../img/basic_logo_dark.svg" alt="user image">
                        </div>
                        <div class='userName_<?php echo $usersSeen['id'] ?>' id="userName"><?php echo $usersSeen['userSender']; ?></div>
                    </div>
                    <div class="middle">
                        <div class='subject_<?php echo $usersSeen['id'] ?>' id="subject"><?php echo $usersSeen['subject']; ?></div>
                        <div id="Show" class='userMessage_<?php echo $usersSeen['id'] ?>'><?php echo $usersSeen['message']; ?></div>
                    </div>
                    <div class="right">
                        <form action="../../back-end/actions/removeMessage.php" method="get">
                            <input type="hidden" value="<?php echo $usersSeen['id'] ?>" name="remove_id" id="remove_id">
                            <input type="submit" value="Remove" class="removeButton_<?php echo $usersSeen['id'] ?> bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md m-3">
                        </form>
                    </div>
                </section>
            </div>
        <?php } ?>
        </div>
    </article>
    <article>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="../../back-end/actions/sendMessage.php" method="POST">
                        <div class="modal-body">
                            <div class="row">
                                <select name="userRecipient" class="form-select" id="userRecipient" name="email-recipient" id="email-recipient">
                                    <option value="">Select the recipient</option>
                                    <?php 
                                    foreach($allUsersList as $allUsers){
                                        echo '<option value="'.$allUsers["email"].'">'.$allUsers["email"].'</option>';
                                    }
                                    ?>  
                                </select>
                            </div>
                            <div class="row">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" aria-label="Subject">
                            </div>
                            <div class="row">
                                <textarea class="form-control" name="message" id="message" placeholder="Message" aria-label="Message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
</main>
<script>
    var select_box_element = document.querySelector('#select_box');
    dselect(select_box_element, {
        search: true
    });
</script>
<script src="../js/messages.js" id="script">
    <?php
        include("../../back-end/actions/updateSeen.php");
    ?>
</script>

<?php
include("../template/footer.php");?>