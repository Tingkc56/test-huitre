<?php ob_start(); ?>
<section>

    <div class="article_about">
        <h2>Editer producteur</h2>

        <form action="hbAdmin.php?action=updateProducer&id=<?= $producer['id'] ?>" enctype="multipart/form-data" method="post">

            <div class="form-article">

                <div class=" text-center">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($producer['p_name']) ?>">
                </div>
                <div class="text-center">
                    <label for="tel">Tel</label>
                    <input type="text" id="tel" name="tel" value="<?= htmlspecialchars($producer['tel']) ?>">
                </div>
                <div class=" text-center">
                    <label for="adresse">Adresse</label>
                    <textarea class="adresse" name="adresse" id="adresse" cols="30" rows="5"><?= htmlspecialchars($producer['adresse']) ?></textarea>
                </div>

                <div class="select-producer text-center">
                    <h4>Ses huitres</h4>
                    <select name="huitre_n" id="">
                    <?php foreach($allHuitres as $allHuitre){?>
                        <option  <?php if ($allHuitre['id']==$producer['huitre_id']){ ?> selected="selected" <?php }?> value="<?= $allHuitre['id'] ?>" ><?=htmlspecialchars($allHuitre['h_name']) ?></option>
                <?php } ?>
                </select>
                </div>


                <div class="text_content">
                    <textarea class="content" name="content" id="content" cols="30" rows="10"><?= htmlspecialchars($producer['p_content']) ?></textarea>
                </div>

                <div class="article_title">
                    <label for="alt">Titre seo d'image</label>
                    <input type="text" id="alt" name="alt" value="<?= htmlspecialchars($producer['alt']) ?>">
                </div>

                <div class="article_title">
                    <input type="file" class="img" name="img">
                    <input type="hidden" name="imageValue" value="<?= htmlspecialchars($producer['img']) ?>"/>
                    <img src="<?= htmlspecialchars($producer['img']) ?>" alt="<?= htmlspecialchars($producer['alt']) ?>">
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