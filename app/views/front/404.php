<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<div class="form-group confirm-message confirm m-auto text-center">
    <h1 class="text-center">Ooops!</h1>

    <h2>La page n'existe pas</h2>

    <button type="button" class="btn border border-warning"><a class="text-white font-weight-bold" href="/">Retouner à l'accueil</a></button>
</div>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>