<?php ob_start(); ?>

<section>
<h1 class="text-center" >Gérer mes messages</h1>
<!-- start  show the message list-->
        <div class="flex-wrapper">
            <?php foreach($messages as $message){?>
                <div class="flex-1-item-perline-s flex-2-item-perline-m flex-3-item-perline-l">
            <article class="case">
                <div class="case-body">
                    <h4 class="case-title"><?=htmlspecialchars($message['mname']) ?></h4>
                    <h5>Mail :<?=htmlspecialchars($message['mail']) ?></h5>
                    <h5>Sujet : <?=htmlspecialchars($message['sujet']) ?></h5>
                    <h5>Recu : <?=htmlspecialchars($message['time']) ?> </p></h5> 
                    <p class="case-text"><?=htmlspecialchars($message['amessage']) ?></p>
                    <div class="btn_gestion">
                    <a class="btn red-btn" href="hbAdmin.php?action=deletMessage&id=<?= $message['id'] ?>">Supprimer ce message</a>
                </div>
                </div>
            </article>
        </div>
            <?php } ?>
        </div>
    </div>
<!-- end of the message list-->
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>