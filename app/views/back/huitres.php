<?php ob_start(); ?>

<section>

    <div class="article_about">
        <h2>Liste des huitres</h2>


        <div class="createPresta">
            <a class="btn_create" href="hbAdmin.php?action=addHuitre">Ajouter huitre</a>
        </div>
        <br>
        <section id="gallery">
            <div class="container">
                <div class="row">
                <?php foreach($allHuitres as $allHuitre){?>
                    <div class="col-lg-3 mb-3">
                        <div class="card">
                            <img src="<?=htmlspecialchars($allHuitre['img']) ?>"
                                alt="<?=htmlspecialchars($allHuitre['h_name']) ?>" class="card-img-top">
                            <div class="card-body">
                                <h5><?=htmlspecialchars($allHuitre['h_name']) ?></h5>
                                <p class="card-text"><?=htmlspecialchars($allHuitre['h_content']) ?> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                    similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore
                                    modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                <a href="hbAdmin.php?action=editHuitre&id=<?= $allHuitre['id'] ?>" class="btn btn-outline-success btn-sm">Editer</a>
                                <a href="hbAdmin.php?action=deleteHuitre&id=<?= $allHuitre['id'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
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