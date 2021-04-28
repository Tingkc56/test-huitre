<?php ob_start(); ?>

<section class="blog">
    <h1 class="text-center">Blog</h1>
 <!-- start nav category for blog-->
    <header id="headerblog">
            <nav id="nav-categories" class="nav nav-category">
                <button class="btn active" onclick="filter('tout')" id="tout"> tout</button>
                <button class="btn" onclick="filter('recettes')" id="recettes"> recettes</button>
                <button class="btn" onclick="filter('astuces')" id="astuces"> astuces</button>
                <button class="btn" onclick="filter('tourisme')" id="tourisme"> tourisme</button>
            </nav>
    </header>
 <!-- end of nav category for blog-->

 <!-- start foreach all articles -->
    <div class="flex-wrapper">
        <?php foreach($allArticles as $allArticle){?>
        <div class="<?=htmlspecialchars($allArticle['category']) ?> blogArticle flex-1-item-perline-s flex-1-item-perline-m flex-3-item-perline-l">
 
        <!-- start one article -->
        <article class="case">
                <div class="case-img-container">
                    <img class="case-img-top" src="<?=htmlspecialchars($allArticle['img']) ?>"
                        alt="<?=htmlspecialchars($allArticle['title']) ?>">
                </div>
                <div class="case-body">
                    <h4 class="case-title"><?=htmlspecialchars($allArticle['title']) ?></h4>
                    <p class="case-text"><?=htmlspecialchars($allArticle['content']) ?> </p>
                    <a href="index.php?action=article&id=<?= $allArticle['id'] ?>"
                        class="btn">Lire plus</a>
                </div>
            </article>
            <!-- end of one article -->
        </div>
        <?php } ?>
    </div>
<!-- start foreach all articles -->
</section>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>