<?php 
include("../template/header.php");
include("../../back-end/db/db.php");
include("../../back-end/actions/usersPageData.php");
?>

<main class="home h-full bg-slate-200 w-full flex flex-col items-center">
    <!-- heading -->
    <div class="bg-pink-700 text-white w-full flex">
        <?php foreach ($userList as $user) { ?>
            <img src="<?php echo $user['profilePic'] ?>" alt="" class="m-5 h-40">
            <aside class="p-5">
                <h1 class="text-4xl font-bold"><?php echo $user['userName'] ?></h1>
                <p><?php echo $user['email'] ?></p> <br><br>
                
                <p>description</p>
            </aside>
        <?php } ?>
    </div>

    <!-- body of the profile -->

    <?php
    foreach ($postList as $post) {
        // this posts the image into the src of the image element, with the caption as its alt
        echo '<img src=" ../../back-end/db/uploads/' . $post['images'] . '" alt=" ' . $post['caption'] . ' " srcset="" class="">';
    }
    ?>
</main>

<?php
include("../template/footer.php");
?>