<?php
include("../template/header.php");
include("../../back-end/actions/retrieve.php");
?>

<main class="home h-full bg-slate-200 w-full flex flex-col items-center">

    <!-- heading -->
    <div class="bg-pink-700 text-white w-full flex">
        <img src="https://pbs.twimg.com/profile_images/1530187776787873793/Hg123lf1_400x400.jpg" alt=""
            class="m-5 h-40">
        <aside class="p-5">
            <h1 class="text-4xl font-bold">kiiri aka Ramiro Angel</h1>
            <p>@kiiri</p> <br><br>

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