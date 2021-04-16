<?php ob_start(); ?>
<section class="edit-producer">
        <h1 class="text-center" >Editer producteur</h1>

        <form class="text-center" action="hbAdmin.php?action=updateProducer&id=<?= $producer['id'] ?>" enctype="multipart/form-data" method="post">

                    <label for="name">Nom</label>
                    <input class="form-item" type="text" id="name" name="name" value="<?= htmlspecialchars($producer['p_name']) ?>">
                    <label for="tel">Tel</label>
                    <input class="form-item" type="text" id="tel" name="tel" value="<?= htmlspecialchars($producer['tel']) ?>">
                    <label for="adresse">Adresse</label>
                    <textarea class="form-item" class="adresse" name="adresse" id="adresse" cols="30" rows="5"><?= htmlspecialchars($producer['adresse']) ?></textarea>

                <div class="select-producer text-center">
                    <label for="select-producer">Ses huitres</label>
                    <select class="form-item" name="huitre_n" id="select-producer">
                    <?php foreach($allHuitres as $allHuitre){?>
                        <option  <?php if ($allHuitre['id']==$producer['huitre_id']){ ?> selected="selected" <?php }?> value="<?= $allHuitre['id'] ?>" ><?=htmlspecialchars($allHuitre['h_name']) ?></option>
                <?php } ?>
                </select>
                </div>


                    <textarea class="form-item content m-top-5" name="content" id="content" cols="30" rows="10"><?= htmlspecialchars($producer['p_content']) ?></textarea>

                    <label for="alt">Titre seo d'image</label>
                    <input class="form-item" type="text" id="alt" name="alt" value="<?= htmlspecialchars($producer['alt']) ?>">

                    <input type="file" class="img" name="img">
                    <input type="hidden" name="imageValue" value="<?= htmlspecialchars($producer['img']) ?>"/>
                    <div>
                        <img class="img-fluid img-br-10px admin-huitre-image m-auto admin-edit-img m-top-5" src="<?= htmlspecialchars($producer['img']) ?>" alt="<?= htmlspecialchars($producer['alt']) ?>">
                    </div>

                    <div class="text-center m-top-5">
                    <input type="submit" class="btn yellow-btn " name="submit" id="upload">
                </div>
        </form>
    </div>

</section>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>