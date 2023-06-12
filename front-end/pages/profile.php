<?php
include("../template/header.php");
include("../../back-end/actions/retrieve.php");
?>

<main class="home h-full bg-slate-200 w-full flex flex-col items-center">
    <!-- heading -->
    <div class="bg-gradient-to-r from-red-500 to-yellow-500 text-white w-full flex">
        <img 
        src="../../back-end/db/uploads/profile/<?php echo($_SESSION['username'])?>.jpeg" 
        alt="<?php echo($_SESSION['username'])?>'s Profile Picture"
            class="m-5 h-40 rounded">
        <aside class="p-5">
            <h1 class="text-4xl font-bold"><?php echo($_SESSION['username'])?></h1> <br><br>

            <p>description</p>
        </aside>
    </div>

    <!-- body of the profile -->

    <?php
    foreach ($posts as $post) {
        // this posts the image into the src of the image element, with the caption as its alt
        echo '<img src=" ../../back-end/db/uploads/' . $post['images'] . '" alt=" ' . $post['caption'] . ' " srcset="" class="">';
    }
    ?>
</main>

<?php include("../template/footer.php"); ?>