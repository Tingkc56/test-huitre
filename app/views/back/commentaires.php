<?php ob_start(); ?>


<section>
<h1 class="text-center" >Gérer mes commentaires</h1>

        <div class="flex-wrapper">
        <?php foreach($allComments as $allComment){?>
                <div class="flex-1-item-perline-s flex-2-item-perline-m flex-3-item-perline-l">
            <article class="case">
                <div class="case-body">
                    <h4 class="case-title">Commentaire pour: <br><?=htmlspecialchars($allComment['title']) ?></h4>
                    <h5>Par :<?=htmlspecialchars($allComment['nom']) ?></h5>
                    <h5>Recu : <?=htmlspecialchars($allComment['cmt_time']) ?></h5> 
                    <p class="case-text"><strong>Commentaire :</strong><?=htmlspecialchars($allComment['content']) ?></p>
                    <p class="case-text"> <strong>ID de article :</strong><?=htmlspecialchars($allComment['article_id']) ?></p>
                    <p class="case-text"><strong>Contenu de article :</strong><?=htmlspecialchars($allComment['article']) ?></p>
                    <div class="btn_gestion">
                    <a class="btn red-btn" href="hbAdmin.php?action=deleteComment&id=<?= $allComment['id'] ?>">Supprimer</a>
                </div>
                </div>
            </article>
        </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>