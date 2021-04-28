<?php ob_start(); ?>

<section>

        <h1 class="text-center" >Gérer vos huitres</h1>
        <div class="text-center">
            <a class="btn green-btn" href="hbAdmin.php?action=addHuitre">Ajouter huitre</a>
        </div>
        <div class="admin-huitre">
            <!-- start show oyster list -->
                <?php foreach($allHuitres as $allHuitre){?>
                    <article class="case">
                        <div class="case-img flex-1-item-perline-s flex-2-item-perline-m text-center">
                            <img class="img-fluid img-br-10px admin-huitre-image m-auto" src="<?=htmlspecialchars($allHuitre['img']) ?>"
                                alt="<?=htmlspecialchars($allHuitre['alt']) ?>">
                        </div>

                        <div class="case-body flex-1-item-perline-s flex-2-item-perline-m">
                            <h3 class="case-title text-center"><?=htmlspecialchars($allHuitre['h_name']) ?></h3>
                            <p class=""><?=htmlspecialchars($allHuitre['h_content']) ?></p>
                            <div class="flex-wrapper flex-space-between">
                                <a href="hbAdmin.php?action=editHuitre&id=<?= $allHuitre['id'] ?>" class="btn yellow-btn flex-2-item-perline-s">Editer</a>
                                <a href="hbAdmin.php?action=deleteHuitre&id=<?= $allHuitre['id'] ?>" class="btn red-btn flex-2-item-perline-s">Supprimer</a>
                            </div>

                        </div>  
                    </article>
                 <?php } ?>
            <!-- end of show oyster list -->
        </div>
</section>



<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>