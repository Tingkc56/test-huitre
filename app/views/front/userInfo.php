<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="user-info m-auto text-center">
    <h1 class="text-center">Bienvenue <?= $_SESSION['pseudo'] ?>!</h1>

    <p>Votre email adresse: <?= $_SESSION['mail'] ?></p>

    <button type="button" class="btn gold-btn"><a href="/">Retouner à l'accueil</a></button>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>