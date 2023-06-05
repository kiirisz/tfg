<?php include("../template/head.php"); ?>

    <body class="font-dmono ">

        <main class="h-screen  w-full flex flex-col items-center bg-gradient-to-br from-pink-500 to-blue-500">

            <div class="text-slate-800 bg-slate-200 flex flex-col items-center text-center my-auto px-5 rounded-md p-5">

                <form action="" method="post" class="my-auto">
                    <label for="username" class="text-2xl">Username</label><br>
                    <input type="text" name="username" id="username" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br><br>

                    <label for="pass" class="text-2xl">Password</label><br>
                    <input type="password" name="pass" id="pass" class="bg-inherit border-b-slate-400 border-solid border-2 hover:border-b-slate-600 transition ease-in-out "><br><br>

                    <input type="submit" value="Log In"
                        class="bg-pink-500 hover:bg-pink-900 transition ease-in-out text-white p-2 font-bold rounded-md"
                    >

                </form>

            </div>

<?php include("../template/footer.php"); ?>