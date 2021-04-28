<?php ob_start(); ?>
<section class="edit-huitre">

        <h1 class="text-center">Editer votre huitre</h1>
<!-- start form edit oyster -->
        <form class="text-center" action="hbAdmin.php?action=updateHuitre&id=<?= $huitre['id'] ?>" enctype="multipart/form-data" method="post">

                    <label for="title">Nom de Huitre</label>
                    <input class="form-item" type="text" id="title" name="title" value="<?= htmlspecialchars($huitre['h_name']) ?>">

                    <label for="content">Description de Huitre</label> 
                    <textarea class="form-item" class="content" name="content" id="content" cols="30" rows="10"> <?= htmlspecialchars($huitre['h_content']) ?></textarea>

                    <label for="alt">alt d'image</label> 
                    <input class="form-item" type="text" id="alt" name="alt">

                    <input type="file" class="img" name="img">
                    <input type="hidden" name="imageValue" value="<?= htmlspecialchars($huitre['img']) ?>"/>
                    <div>
                       <img class="img-fluid img-br-10px admin-huitre-image m-auto admin-edit-img m-top-5" src="<?= htmlspecialchars($huitre['img']) ?>" alt="<?= htmlspecialchars($huitre['alt']) ?>"> 
                    </div>
                    <div class="text-center m-top-5">
                    <input type="submit" class="btn yellow-btn " name="submit" id="upload">
                    </div>
        </form>
<!-- end of form edit oyster -->

</section>



<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>