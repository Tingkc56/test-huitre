<?php ob_start(); ?>

        <section id="gallery">
        <h2>Les commentaires que vous avez recu</h2>
            <div class="container">
                <div class="row">
                <?php foreach($allComments as $allComment){?>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Commentaire pour: <br><?=htmlspecialchars($allComment['title']) ?></h3>
                                <p class="card-text"><?=htmlspecialchars($allComment['content']) ?></p>
                                <p>Par : <strong><?=htmlspecialchars($allComment['nom']) ?></strong> </p>
                                <p>A : <?=htmlspecialchars($allComment['cmt_time']) ?></p>
                                <p class="card-text"> <strong>ID de article :</strong><?=htmlspecialchars($allComment['article_id']) ?></p>
                                <p class="card-text"><strong>Contenu de article :</strong><?=htmlspecialchars($allComment['article']) ?></p>
                                <a href="hbAdmin.php?action=deleteComment&id=<?= $allComment['id'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                            </div>
                        </div>
                    </div>
                 <?php } ?>
                </div>
            </div>
        </section>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>