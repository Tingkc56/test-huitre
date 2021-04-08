<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="blog">
            <div class="container">
                <div class="row">
                <h1 class="text-center" >Nos producteurs</h1>
                <?php foreach($producers as $producer){?>

                    <div class="col-lg-4 mb-4">
                        <article class="card">
                            <img src="<?=htmlspecialchars($producer['img']) ?>"
                                alt="<?=htmlspecialchars($producer['p_name']) ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?=htmlspecialchars($producer['p_name']) ?></h5>
                                <h6>TEL: <?=htmlspecialchars($producer['tel']) ?></h6>
                                <h6>Adresse : <?=htmlspecialchars($producer['adresse']) ?></h6>
                                <p class="card-text"><?=htmlspecialchars($producer['p_content']) ?></p>
                                <a href="index.php?action=producer&id=<?= $producer['id'] ?>" class="btn btn-outline-success btn-sm">Lire plus</a>
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