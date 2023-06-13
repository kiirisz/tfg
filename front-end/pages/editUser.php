<?php
session_start();
include("../template/header.php");
include("../../back-end/actions/retrieve.php");
$userId = $_POST['user_id'];
$GetAllUsers = $conexion->prepare("SELECT * FROM users where idUser = $userId");
$GetAllUsers->execute();
$usersList = $GetAllUsers->fetch();
?>

<main class="home h-full bg-slate-200 w-full flex flex-col items-center">
    <main class="">
        <section class=" my-auto">
            <form action="../../back-end/actions/editUserData.php" method="POST" enctype="multipart/form-data" class="my-auto">
                <input type="hidden" value="<?php echo($_SESSION['user_id'])?>" name="user_id" id="user_id">

                <label for="username" class="text-2xl">Username</label><br>
                <input type="text" name="username" id="username" value="<?php echo $usersList["userName"];?>" required
                    class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                <label for="email" class="text-2xl">Email</label><br>
                <input type="email" name="email" id="email" value="<?php echo $usersList["email"];?>" required
                    class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                <label for="description" class="text-2xl">Description</label><br>
                <input type="text" name="description" id="description"value="<?php echo $usersList["description"];?>" 
                    class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                <label for="date" class="text-2xl">Date of Birth</label><br>
                <input type="date" name="date" id="date" value="<?php echo $usersList["birthDate"];?>" required
                    class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                <label for="phone" class="text-2xl">Phone Number</label><br>
                <input type="text" name="phone" id="phone" value="<?php echo $usersList["phoneNumber"];?>" required
                    class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>


                <label for="profilePic" class="text-2xl">Profile Picture</label><br>
                <input type="file" name="profilePic" id="profilePic" value="<?php echo $usersList["profilePic"];?>" required accept="image/png, image/jpeg"
                    class="bg-inherit border-b-gray-400 border-solid border-2 hover:border-b-gray-600 transition ease-in-out "><br><br>

                <input type="submit" value="Update"
                    class="bg-red-500 hover:bg-red-900 transition ease-in-out text-white p-2 font-bold rounded-md">
            </form>
        </section>
    </main>
</main>

<?php include("../template/footer.php"); ?>