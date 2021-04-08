<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->
<section class="huitres text-center">
        <h1 class="text-center"><?= htmlspecialchars($huitre['h_name']) ?></h1>
        <div class="row">
                <div class="col-12 ">
                        <img class="float-left img-fluid" src="<?= htmlspecialchars($huitre['img']) ?>"
                                alt="<?= htmlspecialchars($huitre['alt']) ?>">
                </div>
                <p class="col-12 text-huitre"><?= htmlspecialchars($huitre['h_content']) ?></p>
                <h2>Liste de Producteurs</h2>
                <!-- foreach les producteur qui a le nom de $huitre['id'] -->
                <div class="row">
                <?php foreach($producers as $producer){?>
                        <div class="col-md-4">
                                <div class="thumbnail">
                                        <a href="index.php?action=producer&id=<?= $producer['id'] ?>">
                                                <img src="<?= htmlspecialchars($producer['img']) ?>" style="width:100%">
                                                <div class="caption">
                                                        <h5><?= htmlspecialchars($producer['p_name']) ?></h5>
                                                </div>
                                        </a>
                                </div>
                        </div>
                <?php } ?>
                </div>
        </div>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>