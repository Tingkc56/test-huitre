<?php ob_start(); ?>
<section class="producer text-center">
<!-- start the producer description -->
    <div class="article-page">
        <div class="article-img flex-1-item-perline-s flex-2-item-perline-m">
            <img class="img-fluid img-br-10px" src="<?= htmlspecialchars($producer['img']) ?>"
                alt="<?= htmlspecialchars($producer['alt']) ?>">
        </div>

        <div class="article-body flex-1-item-perline-s flex-2-item-perline-m">
            <h1 class="text-center"><?= htmlspecialchars($producer['p_name']) ?></h1>

            <h3>TEL: <?=htmlspecialchars($producer['tel']) ?></h3>
            <h3>Adresse : <?=htmlspecialchars($producer['adresse']) ?></h3>

            <p class="article-text"><?= htmlspecialchars($producer['p_content']) ?></p>
        </div>
    </div>
<!-- end of the producer description -->
</section>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>