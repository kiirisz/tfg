<?php 
include("../template/header.php");
include("../../back-end/db/db.php");
include("../../back-end/actions/morePostData.php");
include("../../back-end/actions/newComment.php");
?>
<main class="home h-full bg-slate-200 w-full flex flex-col items-center">
    <div class="post-container">
        <div>
            <div class="first-column">
                <div class="row" id="user">
                    <div class="user-side">
                        <img class="profile-pic" src="<?php echo $url;?>/back-end/db/uploads/profile/<?php echo $selectedUser['profilePic']; ?>" alt="profile picture">
                        <a href="" class="text">
                            <form action="<?php echo $url;?>/front-end/pages/usersPage.php" method="post">
                                <input type="hidden" value="<?php echo $selectedUser['idUser']; ?>" name="user_id" id="user_id">
                                <input type="submit" value="@<?php echo $selectedUser['userName']; ?>" class="user-name">
                            </form>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="image">
                        <img class="rounded" src="<?php echo $url;?>/back-end/db/uploads/posts/<?php echo $selectedPost['images']; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <p class="text"><?php echo $selectedPost['uploadDate']; ?></p>
                    <h3 class="text"><?php echo $selectedPost['caption']; ?></h3>
                </div>
            </div>
            <div class="second-column">
                <div class="row">
                    <h2 class="text">Comments</h2>
                    <form class="comment-form" action="<?php echo $url;?>/back-end/actions/newComment.php" method="post">
                        <input type="hidden" name="IdPost" id="IdPost" value="<?php echo $selectedPost['idPost']; ?>">
                        <input type="text" name="commentMessage" id="commentMessage" placeholder="Write a message">
                        <input type="submit" value="Send" class="btn text" id="commentSubmit">
                    </form>
                    <div class="comments">
                        <?php foreach($commentsPost as $comment){ ?>
                            <div class="comments-info text">
                                <div class="comment-email">
                                    <a href="" class="text">
                                        <form action="<?php echo $url;?>/front-end/pages/usersPage.php" method="post">
                                            <input type="hidden" value="<?php echo $selectedUser['idUser']; ?>" name="user_id" id="user_id">
                                            <input type="submit" value="@<?php echo $comment['user']; ?>">
                                        </form>
                                    </a>
                                </div>
                                <div class="comment-message">
                                    <p><?php echo $comment['message']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
