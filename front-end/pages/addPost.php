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
            <div>
                <form method="POST" enctype="multipart/form-data">
                    <div class = "form-group">
                        <label for="postImage">Image:</label>
                        <br/>
                        <?php 
                        if ($postImage!="") { ?>
                        <img class="img-thumbnail rounded" src="../../img/<?php echo $postImage;?>" width="150" alt="" srcset=""/>
                        <?php } ?>
                        <input type="file" class="form-control" id="postImage" name="postImage" placeholder="ID">
                    </div>

                    <div class = "form-group">
                        <label for="txtAutor">Caption:</label>
                        <input type="text" required class="form-control" value="<?php echo $postCaption; ?>" id="postCaption" name="postCaption" placeholder="Write a caption...">
                    </div>
                        
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                        <a href="posts.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include("../template/footer.php");?>