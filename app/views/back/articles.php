<?php ob_start(); ?>

<section>

    <div class="article_about">
        <h2>Liste des articles</h2>


        <div class="createPresta">
            <a class="btn_create" href="hbAdmin.php?action=addArticle">Creation d'un nouvel article</a>
        </div>
        <br>
        <section id="gallery">
            <div class="container">
                <div class="row">
                <?php foreach($allArticles as $allArticle){?>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="<?=htmlspecialchars($allArticle['img']) ?>"
                                alt="<?=htmlspecialchars($allArticle['title']) ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?=htmlspecialchars($allArticle['title']) ?></h5>
                                <p class="card-text"><?=htmlspecialchars($allArticle['content']) ?> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                    similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore
                                    modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                <a href="hbAdmin.php?action=editArticle&id=<?= $allArticle['id'] ?>" class="btn btn-outline-success btn-sm">Editer</a>
                                <a href="hbAdmin.php?action=deleteArticle&id=<?= $allArticle['id'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                            </div>
                        </div>
                    </div>
                 <?php } ?>
                </div>
            </div>
        </section>

    </div>
</section>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>