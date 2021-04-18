<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->
<section class="huitres">
<h1 class="text-center" >Nos variétés des Huitres</h1>
<div class="flex-wrapper">
<?php foreach($huitres as $huitre){?>
        <div class="flex-1-item-perline-s flex-2-item-perline-m flex-4-item-perline-l">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="index.php?action=huitre&id=<?= $huitre['id'] ?>" data-abc="true"> <img class="img-fluid img-br-10px" src="<?=htmlspecialchars($huitre['img']) ?>" alt="<?=htmlspecialchars($huitre['h_name']) ?>"> </a>
                    <div class="product-action">
                        <div class="product-action-style">
                         <h2>
                         <a href="index.php?action=huitre&id=<?= $huitre['id'] ?>"> 
                         <?=htmlspecialchars($huitre['h_name']) ?></a> 
                         </h2></div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
</div>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>