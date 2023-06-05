<?php 
include("../template/header.php");
include("../../back-end/db/db.php");
?>

<?php

$SQLsequence = $conexion->prepare("SELECT * FROM Posts");
$SQLsequence->execute();
$postsList = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);

foreach($postsList as $posts){ ?>
<main class="h-full bg-slate-200 w-full flex flex-col items-center">

    <div class="text-slate-800 text-center text-">
        <div>
            <img src="<?php echo $url;?>/back-end/db/uploads/<?php echo $posts['images']; ?>" alt="post image">
             <div>
                <h6><?php echo $posts['likes']; ?></h6>
                  <h3><?php echo $posts['caption']; ?></h3>
                </div>
            </div>
        </div>
    </div>
</main>

<?php } 
include("../template/footer.php");?>