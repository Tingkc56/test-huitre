<?php ob_start(); ?>
<section class="new-producer">
        <h1 class="text-center" >Ajouter un producteur</h1>
<!-- start new producer -->
        <form class="text-center"  action="hbAdmin.php?action=newProducer" enctype="multipart/form-data" method="post">

                <label for="name">Nom de Producteur</label>
                <input  class="form-item" type="text" id="name" name="name">

                    <label for="adresse">Son adresse</label><br>
                    <textarea   class="form-item" name="adresse" id="adresse" cols="30" rows="4"></textarea>

                    <label for="content">Son numero de telephone</label><br>
                    <input class="form-item"  type="text" id="tel" name="tel">
<!-- chose the producer's oyster type -->
                <div class="select-producer text-center">
                <label for="select-producer">Ses huitres</label>
                    <select  class="form-item" name="huitre_n" id="select-producer">
                    <?php foreach($allHuitres as $allHuitre){?>
                        <option  value="<?= $allHuitre['id'] ?>"><?=htmlspecialchars($allHuitre['h_name']) ?></option>
                <?php } ?>
                </select>
                </div>
<!-- end of chose the producer's oyster type -->

                    <label for="content">Presentation de producteur</label><br>
                    <textarea  class="form-item" class="content" name="content" id="content" cols="30" rows="10"></textarea>
                    <label for="alt">alt d'image</label>
                    <input  class="form-item" type="text" id="alt" name="alt">

                    <input type="file" class="img" name="img">


                    <div class="text-center m-top-5">
                    <input type="submit" class="btn green-btn " name="submit" id="upload">
                </div>
        </form>
    </div>
<!-- end of new producer -->

</section>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>