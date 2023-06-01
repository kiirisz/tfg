<?php include("front-end/template/header.php"); ?>

        <!-- dynamically generated thing goes here; for the time let's just write some text so as to signify you aren't following anyone -->
        <!-- TODO: this should hide once you're following someone -->
        <main class="h-full bg-slate-200 w-full flex flex-col items-center">

            <div class="text-slate-800 flex flex-col items-center text-center my-auto text-">
                <p class="font-black hover:rotate-180 transition-all text-9xl w-fit">?</p>

                <p class="text-2xl font-bold">
                    You aren't following anyone yet!<br>
                    Go to the <a href="front-end/pages/posts.php">Explore</a> page and follow a few accounts!   
                </p>

                <div class="text-lg" id="linktest">
                    We suggest <a href="front-end/pages/profile.php">@kiiri</a>, <a href="#">@ciudadanoejemplar</a> and <a href="#">@ili</a>, but we're a bit biased
                </div>
            </div>
        </main>

<?php include("front-end/template/footer.php"); ?>