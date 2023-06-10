<?php
include("../template/header.php");
include("../../back-end/actions/add.php");
?>

<main class="home h-screen w-full flex flex-col items-center bg-gradient-to-br from-red-500 to-yellow-500">

    <div class="text text-slate-800  flex flex-col items-center text-center my-auto px-5 rounded-md p-5">
        <!-- i am ready and willing to delete php from existence if this doesn't work -->
        <form id="addImage" action="../../back-end/actions/add.php" method="post" enctype="multipart/form-data" class="my-auto">
            <label for="imginput" class="text-2xl">Upload image...</label><br>
            <input type="file" name="imginput" id="imginput" accept="image/png, image/jpeg"> <br><br>

            <label for="caption" class="text-2xl">Caption</label><br>
            <textarea name="caption" id="caption" cols="30" rows="10" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out resize-none"></textarea>
            <br><br>


            <input type="submit" value="Submit"
                class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md">
        </form>
    </div>

<?php
include("../template/footer.php");
?>