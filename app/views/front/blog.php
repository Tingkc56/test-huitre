<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="blog">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Blog</h1>
            <header id="headerblog">
                <nav id="nav-categories">
                    <button class="btn active" onclick="filter('tout')" id="tout"> tout</button>
                    <button class="btn" onclick="filter('recettes')" id="recettes"> Recettes</button>
                    <button class="btn" onclick="filter('astuces')" id="astuces"> astuces</button>
                    <button class="btn" onclick="filter('tourisme')" id="tourisme"> tourisme</button>
                </nav>
            </header>

            <?php foreach($allArticles as $allArticle){?>
            <article class="<?=htmlspecialchars($allArticle['category']) ?> blogArticle col-lg-4 mb-4 card">
                <img src="<?=htmlspecialchars($allArticle['img']) ?>" alt="<?=htmlspecialchars($allArticle['title']) ?>"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-text"><?=htmlspecialchars($allArticle['title']) ?></h5>
                    <p class="card-text"><?=htmlspecialchars($allArticle['content']) ?> </p>
                    <a href="index.php?action=article&id=<?= $allArticle['id'] ?>"
                        class="btn btn-outline-success btn-sm">Lire plus</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>