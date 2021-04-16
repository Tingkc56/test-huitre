<?php ob_start(); ?>
<section class="new-huitre">
        <h1 class="text-center" >Ajouter votre huitre</h1>

        <form class="text-center" action="hbAdmin.php?action=newHuitre" enctype="multipart/form-data" method="post">

                    <label for="title">Nom de Huitre</label>
                    <input  class="form-item" type="text" id="title" name="title">

                    <label for="content">Description de Huitre</label><br>
                    <textarea  class="form-item" class="content" name="content" id="content" cols="30" rows="10"></textarea>

                    <label for="alt">alt d'image</label><br>
                    <input  class="form-item" type="text" id="alt" name="alt">

                    <input type="file" class="img" name="img">


                    <div class="text-center m-top-5">
                    <input type="submit" class="btn green-btn " name="submit" id="upload">
                </div>
        </form>
    </div>

</section>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>