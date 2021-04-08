<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<div class="article m-auto text-center row">
    <div class="col">
        <img class="float-left img-fluid" src="<?= htmlspecialchars($article['img']) ?>" alt="<?= htmlspecialchars($article['alt']) ?>">
    </div>

    <div class="col">
        <h1 class="text-center"><?= htmlspecialchars($article['title']) ?></h1>

        <p><?= htmlspecialchars($article['content']) ?></p>
<!-- les commentaires -->
        <div class="article-commentaires">
                <?php foreach($articleComments as $articleComment){?>
                    
                    <p>Par : <strong><?=htmlspecialchars($articleComment['name']) ?></strong> </p>
                    <p>A : <?=htmlspecialchars($articleComment['time']) ?></p>
                    <p class="card-text"><?=htmlspecialchars($articleComment['content']) ?></p>
                <?php } ?>
        </div>

        <form action="index.php?action=commentaire&id=<?= htmlspecialchars($article['id']) ?>" method="post">
            <div class="form-group">
                <label for="comment">Votre commentaire:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>
            <div class="form-group">
                <label for="usr">Votre nom:</label>
                <input type="text" class="form-control" id="cmt-name" name="name">
            </div>
            <button type="submit" class="btn btn-secondary">Envoyer</button>
        </form>
    </div>

</div>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>