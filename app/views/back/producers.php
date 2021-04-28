<?php ob_start(); ?>
<section>
        <h1 class="text-center" >Gérer vos producteurs</h1>
<!-- start show all producer list-->
        <div class="text-center">
            <a class="btn green-btn" href="hbAdmin.php?action=addProducer">Ajouter producteur</a>
        </div>
         
        <div class="admin-producer">
        <?php foreach($allProducers as $allProducer){?>
                    <article class="case">
                        <div class="case-img flex-1-item-perline-s flex-2-item-perline-m text-center">
                            <img class="img-fluid img-br-10px admin-huitre-image m-auto" src="<?=htmlspecialchars($allProducer['img']) ?>"
                                alt="<?=htmlspecialchars($allProducer['alt']) ?>">
                        </div>
                        <div class="case-body flex-1-item-perline-s flex-2-item-perline-m">
                            <h3 class="case-title"><?=htmlspecialchars($allProducer['p_name']) ?></h3>
                            <h3>TEL: <?=htmlspecialchars($allProducer['tel']) ?></h3>
                            <h3>Adresse : <?=htmlspecialchars($allProducer['adresse']) ?></h3>
                            <p class=""><?=htmlspecialchars($allProducer['p_content']) ?></p>
                            <div class="flex-wrapper flex-space-between">
                                <a href="hbAdmin.php?action=editProducer&id=<?= $allProducer['id'] ?>" class="btn yellow-btn flex-2-item-perline-s">Editer</a>
                                <a href="hbAdmin.php?action=deleteProducer&id=<?= $allProducer['id'] ?>" class="btn red-btn flex-2-item-perline-s">Supprimer</a>

                            </div>

                        </div>  
                    </article>
                 <?php } ?>
                </div>
<!-- end of producer list-->
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>