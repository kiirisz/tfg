<?php
include("../../back-end/actions/register.php");

include("../template/head.php");
?>

<body class="font-dmono ">

    <main class=" flex">
        <main class="main-side md:w-1/2 w-full h-screen bg-gray-200 flex flex-col items-center text-center">
            <section class=" my-auto">
                <div>
                    <img src="../../img/logo.svg" alt="kuenty logo" class=" w-40 mx-auto">
                    <h1>kuenty</h1>
                </div>

                <form action="../../back-end/actions/register.php" method="POST" enctype="multipart/form-data" class="my-auto">
                    <label for="username" class="text-2xl">Username</label><br>
                    <input type="text" name="username" id="username" required
                        class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                    <label for="pass" class="text-2xl">Password</label><br>
                    <input type="password" name="pass" id="pass" required
                        class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                    <label for="email" class="text-2xl">Email</label><br>
                    <input type="email" name="email" id="email" required
                        class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                    <label for="description" class="text-2xl">Description</label><br>
                    <input type="text" name="description" id="description"
                        class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                    <label for="date" class="text-2xl">Date of Birth</label><br>
                    <input type="date" name="date" id="date" required
                        class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                    <label for="phone" class="text-2xl">Phone Number</label><br>
                    <input type="text" name="phone" id="phone" required
                        class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>


                    <label for="profilePic" class="text-2xl">Profile Picture</label><br>
                    <input type="file" name="profilePic" id="profilePic" required accept="image/png, image/jpeg"
                        class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                    <input type="submit" value="Sign Up"
                        class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md">

                    <input type="button" value="Login" onclick="window.location.href='login.php';" class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md">

                </form>
            </section>
        </main>

        <aside class="main-side bg-gradient-to-r from-red-500 to-yellow-500 h-screen w-1/2 hidden md:flex"></aside>
