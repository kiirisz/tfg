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
          style="background-image: url('<?php echo $url;?>/back-end/db/uploads/<?php echo $posts['images']; ?>')"
        ></div>
        <!--
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/881/900/900.jpg');
          "
        ></div>

        <div
          class="grid-item wide"
          style="
            background-image: url('https://picsum.photos/id/248/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/423/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/534/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/664/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/176/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="background-image: url('https://picsum.photos/id/73/900/900.jpg')"
        ></div>
        <div
          class="grid-item tall wide"
          style="
            background-image: url('https://picsum.photos/id/806/900/900.jpg');
          "
        ></div>
        <div class="grid-item"
        style="background-image: url('<?php echo $url;?>/back-end/db/uploads/<?php echo $posts['images']; ?>')">
        </div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/943/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/733/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/584/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/844/900/900.jpg');
          "
        ></div>
        <div
          class="grid-item"
          style="
            background-image: url('https://picsum.photos/id/160/900/900.jpg');
          "
        ></div>
        -->
      <?php } ?>
    </div>
  </main>

<?php include("../template/footer.php"); ?>