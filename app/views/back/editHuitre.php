<?php ob_start(); ?>
<section>

    <div class="article_about">
        <h2>Editer votre huitre</h2>

        <form action="hbAdmin.php?action=updateHuitre&id=<?= $huitre['id'] ?>" enctype="multipart/form-data" method="post">

            <div class="form-article text-center">

                <div class="article_title text-center">
                    <label for="title">Nom de Huitre</label>
                    <input type="text" id="title" name="title" value="<?= htmlspecialchars($huitre['h_name']) ?>">
                </div>


                <div class="text_content">
                    <label for="content">Description de Huitre</label><br>
                    <textarea class="content" name="content" id="content" cols="30" rows="10"> <?= htmlspecialchars($huitre['h_content']) ?></textarea>
                </div>

                <br>
                <div class="huitre_alt">
                    <label for="alt">alt d'image</label><br>
                    <input type="text" id="alt" name="alt">
                </div>
                <br>
                <!-- voir js pour affichier new l'image sur la page si choisi -->
                <div class="huitre_img">
                    <input type="file" class="img" name="img">
                    <input type="hidden" name="imageValue" value="<?= htmlspecialchars($huitre['img']) ?>"/>
                    <img src="<?= htmlspecialchars($huitre['img']) ?>" alt="<?= htmlspecialchars($huitre['alt']) ?>">
                </div>

            </div>

            <div class="subBtn">
                <input type="submit" class="btn btn-secondary" name="submit" id="upload">
            </div>
        </form>
    </div>

</section>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>