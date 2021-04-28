<?php ob_start(); ?>
<section class="huitre text-center">

        <div class="article-page">
<!-- start the oyster description -->
                <div class="article-img flex-1-item-perline-s flex-2-item-perline-m">
                        <img class="img-fluid img-br-10px huitre-adapt-img"
                                src="<?= htmlspecialchars($huitre['img']) ?>"
                                alt="<?= htmlspecialchars($huitre['alt']) ?>">
                </div>
                <div class="article-body flex-1-item-perline-s flex-2-item-perline-m">
                        <h1 class="text-center"><?= htmlspecialchars($huitre['h_name']) ?></h1>
                        <p class="article-text"><?= htmlspecialchars($huitre['h_content']) ?></p>
                        <!-- start oyster tast note by svg -->
                        <div class="container__progressbars">
                                <div class="progressbar">
                                        <svg class="progressbar__svg">
                                                <circle cx="40" cy="40" r="35" class="progressbar__svg-circle circle-1">
                                                </circle>
                                        </svg>
                                        <span class="progressbar__text">IODE</span>
                                </div>
                                <div class="progressbar">
                                        <svg class="progressbar__svg">
                                                <circle cx="40" cy="40" r="35" class="progressbar__svg-circle circle-2">
                                                </circle>
                                        </svg>
                                        <span class="progressbar__text">CHARNUE</span>
                                </div>
                                <div class="progressbar">
                                        <svg class="progressbar__svg">
                                                <circle cx="40" cy="40" r="35" class="progressbar__svg-circle circle-3">
                                                </circle>
                                        </svg>
                                        <span class="progressbar__text">SUCREE</span>
                                </div>
                        </div>
                        <!-- end of oyster tast note by svg -->
<!-- end of the oyster description -->

                        <h2>Liste de Producteurs</h2>
<!-- start foreach producers detail who get the good huitre id -->
                        <div class="huitre-page-producors flex-wrapper">
                                <?php foreach($producers as $producer){?>
                                <div
                                        class="huitre-page-producor-info flex-2-item-perline-s flex-2-item-perline-m text-center">
                                        <div>
                                                <a href="index.php?action=producer&id=<?= $producer['id'] ?>">
                                                        <img class="circular-thumbnail-img"
                                                                src="<?= htmlspecialchars($producer['img']) ?>" alt="<?= htmlspecialchars($producer['alt']) ?>">
                                                        <div class="text-center">
                                                                <h3><?= htmlspecialchars($producer['p_name']) ?></h3>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <?php } ?>
                        </div>
<!-- end of producers detail-->
                </div>
        </div>
</section>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>