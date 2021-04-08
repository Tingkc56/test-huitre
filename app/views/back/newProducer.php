<?php ob_start(); ?>
<section>

    <div class="producers">
        <h2>Ajouter un Producteur</h2>

        <form action="hbAdmin.php?action=newProducer" enctype="multipart/form-data" method="post">

            <div class="form-article text-center">

                <div class="name text-center">
                <h4>Nom de producteur</h4>
                <input type="text" id="name" name="name">
                </div>

                <div class="adresse">
                    <label for="adresse">Son adresse</label><br>
                    <textarea  name="adresse" id="adresse" cols="30" rows="4"></textarea>
                </div>

                <div class="text_content">
                    <label for="content">Son numero de telephone</label><br>
                    <input type="text" id="tel" name="tel">
                </div>

                <div class="select-producer text-center">
                    <h4>Ses huitres</h4>
                    <select name="huitre_n" id="">
                    <?php foreach($allHuitres as $allHuitre){?>
                        <option  value="<?= $allHuitre['id'] ?>"><?=htmlspecialchars($allHuitre['h_name']) ?></option>
                <?php } ?>
                </select>
                </div>

                <div class="text_content">
                    <label for="content">Presentation de producteur</label><br>
                    <textarea class="content" name="content" id="content" cols="30" rows="10"></textarea>
                </div>

                <br>
                <div class="huitre_alt">
                    <label for="alt">alt d'image</label>
                    <input type="text" id="alt" name="alt">
                </div>
                <br>

                <div class="huitre_img">
                    <input type="file" class="img" name="img">
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