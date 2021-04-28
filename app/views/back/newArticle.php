<?php ob_start(); ?>
<section class="new-article">
        <h1 class="text-center" >Entrer votre article</h1>
<!-- start new article -->
        <form class="text-center" action="hbAdmin.php?action=newArticle" enctype="multipart/form-data" method="post">

                    <label for="title">Votre titre</label>
                    <input class="form-item" type="text" id="title" name="title">
<!-- start chose the article category -->
                <div class="article_category text-center">
                            <input type="radio" name="category_blog"  value="recettes">Recettes
                            <input type="radio" name="category_blog"  value="astuces">Astuces
                            <input type="radio" name="category_blog"  value="tourisme" >Tourisme
                </div>
<!-- end of chose the article category -->
                    <textarea class="form-item" class="content" name="content" id="content" cols="30" rows="10"></textarea>

                    <label for="alt">Alt d'image</label>
                    <input class="form-item" type="text" id="alt" name="alt">

                    <input type="file" class="Img" name="img">

                    <div class="text-center m-top-5">
                    <input type="submit" class="btn green-btn " name="submit" id="upload">
                </div>
        </form>
    </div>
<!-- end of new article -->
</section>



<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>