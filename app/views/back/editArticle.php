<?php ob_start(); ?>
<section class="edit-article">

        <h1 class="text-center" >Entrer votre article</h1>

        <form class="text-center" action="hbAdmin.php?action=updateArticle&id=<?= $article['id'] ?>" enctype="multipart/form-data" method="post">
                    <label for="title">Votre titre</label>
                    <input class="form-item" type="text" id="title" name="title" value="<?= htmlspecialchars($article['title']) ?>">

                <div class=" text-center">
                            <input <?php if ($article['category']== 'recettes'){ ?> checked="checked" <?php }?> type="radio" name="category_blog" value="recettes" />Recettes
                            <input <?php if ($article['category']== 'astuces'){ ?> checked="checked" <?php }?> type="radio" name="category_blog" value="astuces" />Astuces
                            <input <?php if ($article['category']== 'tourisme'){ ?> checked="checked" <?php }?> type="radio" name="category_blog" value="tourisme" />Tourisme
                </div>

                    <textarea class="content form-item" name="content" id="content" cols="30" rows="10"><?= htmlspecialchars($article['content']) ?></textarea>
    
                    <label for="alt">Alt</label>
                    <input class="form-item" type="text" id="alt" name="alt" value="<?= htmlspecialchars($article['alt']) ?>">

                    <input type="file" class="Img" name="img">
                    <input type="hidden" name="imageValue" value="<?= htmlspecialchars($article['img']) ?>"/>
                    <div>
                    <img class="img-fluid img-br-10px admin-huitre-image m-auto admin-edit-img m-top-5" src="<?= htmlspecialchars($article['img']) ?>" alt="<?= htmlspecialchars($article['alt']) ?>">                        
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