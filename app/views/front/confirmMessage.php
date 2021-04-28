<?php ob_start(); ?>

<section class="confirm-message m-auto text-center">
    <h1 class="text-center">Merci pour votre message!</h1>

    <h2>Votre message a été envoyé avec succès ! </h2>

    <button type="button" class="btn"><a href="/">Retouner à l'accueil</a></button>
</section>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>