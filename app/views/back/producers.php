<?php ob_start(); ?>

<section>

    <div class="article_about">
        <h2>Liste des Producteurs</h2>


        <div class="createPresta">
            <a class="btn_create" href="hbAdmin.php?action=addProducer">Ajouter producteur</a>
        </div>
        <br>
        <section id="gallery">
            <div class="container">
                <div class="row">
                <?php foreach($allProducers as $allProducer){?>
                    <div class="col-lg-3 mb-3">
                        <div class="card">
                            <img src="<?=htmlspecialchars($allProducer['img']) ?>"
                                alt="<?=htmlspecialchars($allProducer['p_name']) ?>" class="card-img-top">
                            <div class="card-body">
                                <h5><?=htmlspecialchars($allProducer['p_name']) ?></h5>
                                <h6>TEL: <?=htmlspecialchars($allProducer['tel']) ?></h6>
                                <h6>Adresse : <?=htmlspecialchars($allProducer['adresse']) ?></h6>
                                <p class="card-text"><?=htmlspecialchars($allProducer['p_content']) ?> </p>
                                <a href="hbAdmin.php?action=editProducer&id=<?= $allProducer['id'] ?>" class="btn btn-outline-success btn-sm">Editer</a>
                                <a href="hbAdmin.php?action=deleteProducer&id=<?= $allProducer['id'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
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