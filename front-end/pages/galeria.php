<?php 
include("../template/header_galeria.php");
include("../../back-end/db/db.php");
?>

<?php
$SQLsequence = $conexion->prepare("SELECT * FROM Posts");
$SQLsequence->execute();
$postsList = $SQLsequence->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="home h-full bg-slate-200 w-full flex flex-col items-center">
  <div class="grid-container">
      <?php foreach($postsList as $posts){ ?>
        <div 
          class="grid-item"
          style="background-image: url('<?php echo $url;?>/back-end/db/uploads/posts/<?php echo $posts['images']; ?>')"
        ></div>
      <?php } ?>
    </div>
  </main>
