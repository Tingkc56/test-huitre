<?php ob_start(); ?>

<section>

    <div class="article_about">
        <h2>Les messages que vous avez recu</h2>

        <div class="all-articles">
            <?php foreach($messages as $message){?>

            <div class="article">
                <div class="card_mail">
                    <h3>Nouveau message de :</h3>
                    <h3><?=htmlspecialchars($message['mname']) ?></h3>
                </div>

                <div class="card_mail">
                    <h3>Mail :</h3>
                    <p><?=htmlspecialchars($message['mail']) ?> </p>
                </div>

                <div class="card_mail">
                    <h3>Sujet :</h3>
                    <p><?=htmlspecialchars($message['sujet']) ?> </p>
                </div>

                <div class="card_mail">
                    <h3>Message :</h3>
                    <p><?=htmlspecialchars($message['amessage']) ?> </p>
                </div>

                <div class="card_mail">
                    <h3>Recu :</h3>
                    <p><?=htmlspecialchars($message['time']) ?> </p>
                </div>

                <div class="btn_gestion">
                    <a class="btn_delet" href="hbAdmin.php?action=deletMessage&id=<?= $message['id'] ?>">Supprimer ce message</a>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>



<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>