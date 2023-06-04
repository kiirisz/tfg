<?php
include("../template/header.php");
include("../../back-end/actions/add.php");
?>

<main class="h-full bg-slate-200 w-full flex flex-col items-center">
    <div class="col-md-5">
        <div>
            <div>
                <h3>New Post</h3>
            </div>

            <!-- i am ready and willing to delete php from existence if this doesn't work -->
            <form action="../../back-end/actions/add.php" method="post" enctype="multipart/form-data">
                <input type="file" name="imginput" id="imginput" accept="image/png, image/jpeg">        <br>
                <input type="text" name="caption" id="caption">                                         <br>
                

                <input type="submit" value="submit">
            </form>
        </div>
    </div>
</main>

<?php
include("../template/footer.php");
?>