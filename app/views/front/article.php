<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="blog-article text-center">

    <div class="article-page">
        <div class="article-img flex-1-item-perline-s flex-2-item-perline-m">
            <img class="img-fluid img-br-10px" src="<?= htmlspecialchars($article['img']) ?>"
                alt="<?= htmlspecialchars($article['alt']) ?>">
        </div>

        <div class="article-body flex-1-item-perline-s flex-2-item-perline-m">
            <h1 class="text-center"><?= htmlspecialchars($article['title']) ?></h1>
            <p class="article-text"><?= htmlspecialchars($article['content']) ?></p>
        </div>  
    </div>

        <div class="article-page">
             <!-- les commentaires -->
             <div class="blog-comments article-body flex-1-item-perline-s flex-2-item-perline-m">
                <?php foreach($articleComments as $articleComment){?>

                <p>Par : <strong><?=htmlspecialchars($articleComment['name']) ?></strong> </p>
                <p>A : <?=htmlspecialchars($articleComment['time']) ?></p>
                <p class="article-text"><?=htmlspecialchars($articleComment['content']) ?></p>
                <?php } ?>
            </div>

            <form id="comment" class="form-comments article-body flex-1-item-perline-s flex-2-item-perline-m" action="index.php?action=commentaire&id=<?= htmlspecialchars($article['id']) ?>" method="post">
                    <label for="comment">Votre commentaire:</label>
                    <textarea class="form-item" rows="5" id="comment" name="comment"></textarea>
                    <label for="usr">Votre nom:</label>
                    <input type="text" class="form-item" id="cmt-name" name="name">
                    <button type="submit" class="btn" onclick="return validateComments()">Envoyer</button>
            </form>
        </div>



    <?php $content = ob_get_clean(); ?>
    <!-- fonction php pour injecter le template -->
    <?php require 'templates/template.php'; ?>