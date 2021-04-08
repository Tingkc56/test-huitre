<?php ob_start(); ?>
<section>

    <div class="article_about">
        <h2>Entrer votre article</h2>

        <form action="hbAdmin.php?action=updateArticle&id=<?= $article['id'] ?>" enctype="multipart/form-data" method="post">

            <div class="form-article">

                <div class="article_title text-center">
                    <label for="title">Votre titre</label>
                    <input type="text" id="title" name="title" value="<?= htmlspecialchars($article['title']) ?>">
                </div>

                <div class="article_category text-center">

                            <input <?php if ($article['category']== 'recettes'){ ?> checked="checked" <?php }?> type="radio" name="category_blog" value="recettes" />Recettes
                            <input <?php if ($article['category']== 'astuces'){ ?> checked="checked" <?php }?> type="radio" name="category_blog" value="astuces" />Astuces
                            <input <?php if ($article['category']== 'tourisme'){ ?> checked="checked" <?php }?> type="radio" name="category_blog" value="tourisme" />Tourisme

                </div>

                <div class="text_content">
                    <textarea class="content" name="content" id="content" cols="30" rows="10"><?= htmlspecialchars($article['content']) ?></textarea>
                </div>

                <div class="article_title">
                    <label for="alt">Titre seo de votre image</label>
                    <input type="text" id="alt" name="alt" value="<?= htmlspecialchars($article['alt']) ?>">
                </div>

                <div class="article_title">
                    <input type="file" class="Img" name="img">
                    <input type="hidden" name="imageValue" value="<?= htmlspecialchars($article['img']) ?>"/>
                    <img src="<?= htmlspecialchars($article['img']) ?>" alt="<?= htmlspecialchars($article['alt']) ?>">
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