<?php ob_start(); ?>


<section>
        <h1 class="text-center" >Gérer vos articles</h1>

        <div class="text-center">
            <a class="btn green-btn" href="hbAdmin.php?action=addArticle">Créer un nouvel article</a>
        </div>
         
        <div class="admin-blog">
<!-- start foreach all articles -->
        <?php foreach($allArticles as $allArticle){?>
                    <article class="case">
                        <div class="case-img flex-1-item-perline-s flex-2-item-perline-m text-center">
                            <img class="img-fluid img-br-10px admin-huitre-image m-auto" 
                            src="<?=htmlspecialchars($allArticle['img']) ?>"
                            alt="<?=htmlspecialchars($allArticle['alt']) ?>" >
                        </div>

                        <div class="case-body flex-1-item-perline-s flex-2-item-perline-m">
                            <h3 class="case-title"><?=htmlspecialchars($allArticle['title']) ?></h3>
                            <p class=""><?=htmlspecialchars($allArticle['content']) ?></p>
                            <div class="flex-wrapper flex-space-between">
                            <a href="hbAdmin.php?action=editArticle&id=<?= $allArticle['id'] ?>" class="btn yellow-btn flex-2-item-perline-s">Editer</a>
                                <a href="hbAdmin.php?action=deleteArticle&id=<?= $allArticle['id'] ?>" class="btn red-btn flex-2-item-perline-s">Supprimer</a>
                            </div>

                        </div>  
                    </article>
                 <?php } ?>
<!-- end of foreach all articles -->
                </div>
</section>



<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>