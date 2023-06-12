<?php
include("../template/header.php");
include("../../back-end/db/db.php");
include("../../back-end/actions/usersPageData.php");
?>

<main class="home h-full bg-slate-200 w-full flex flex-col items-center">
    <!-- heading -->
    <div class="bg-gradient-to-r from-red-500 to-yellow-500 text-white w-full flex">
        <img src="../../back-end/db/uploads/profile/<?php echo $user['profilePic'] ?>" alt="<?php $user['userName']?>'s Profile Picture" class="m-5 h-40 w-40 object-cover rounded">
        <aside class="p-5">
            <h1 class="text-4xl font-bold">
                <?php echo $user['userName'] ?>
            </h1><br><br>

            <p>
                <?php echo $user['description']?>
            </p>
        </aside>
    </div>

    <!-- body of the profile -->

    <main class="w-full grid grid-cols-2 md:grid-cols-4 gap-3 profilegrid p-3">
        <?php
        foreach ($posts as $post) {
            // this posts the image into the src of the image element, with the caption as its alt
            echo '
            <div class="rounded overflow-hidden bg-black " style="background-image: url(../../back-end/db/uploads/posts/' . $post['images'] . '); background-size: cover; background-position: center;">
                <div class="w-full h-full opacity-0 hover:opacity-80 bg-black transition-opacity duration-100 p-2">
                    <a href="#" class=" flex">
                        <img src="../../back-end/db/uploads/profile/'.$user['profilePic'].'"
                        alt="'.($user['userName']).'\'s Profile Picture" 
                        class="h-6 w-6 object-cover rounded m-1">
                        <div class=" m-1">'.($user['userName']).'</div>
                    </a>
                    <p class="text-white">'. $post['caption'].
                    '</p>
                </div>
            </div>
            ';
        }
        ?>
    </main>
</main>

<?php
include("../template/footer.php");
?>