<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<div class="article m-auto text-center row">
    <div class="col">
        <img class="float-left img-fluid" src="<?= htmlspecialchars($producer['img']) ?>" alt="<?= htmlspecialchars($producer['alt']) ?>">
    </div>

    <div class="col">
        <h1 class="text-center"><?= htmlspecialchars($producer['p_name']) ?></h1>

        <h6>TEL: <?=htmlspecialchars($producer['tel']) ?></h6>
        <h6>Adresse : <?=htmlspecialchars($producer['adresse']) ?></h6>

        <p><?= htmlspecialchars($producer['p_content']) ?></p>

    </div>

</div>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>