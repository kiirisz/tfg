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
      <?php foreach($postsList as $posts){
        $SQLsequence = $conexion->prepare("SELECT * FROM users where email='".$posts['email']."'");
        $SQLsequence->execute();
        $userList = $SQLsequence->fetch();?>
          <div 
            class="grid-item"
            style="background-image: url('<?php echo $url;?>/back-end/db/uploads/posts/<?php echo $posts['images']; ?>')"
          >
          <?php
              echo '
              <div class="postInformation w-full h-full opacity-0 hover:opacity-80 bg-black transition-opacity duration-100 p-2">
                  <a href="#" class=" flex">
                      <img src="../../back-end/db/uploads/profile/'.$userList['profilePic'].'"
                      alt="'.($userList['userName']).'\'s Profile Picture" 
                      class="h-6 w-6 object-cover rounded m-1">
                      <div class=" m-1">'.($userList['userName']).'</div>
                  </a>
                  <p class="postCaption">'. $posts['caption'].
                  '</p>
              </div>
              ';
          ?>
        </div>
      <?php } ?>
    </div>
  </main>
