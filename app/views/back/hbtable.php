<?php ob_start(); ?>

<h1 class="text-center">Tableau de bord <?= $_SESSION['name'] ?></h1>

<section class="card_gestion">

<div class="card-deck">

  <div class="card bg-warning">
    <div class="card-body text-center">
    <h3><a href="hbAdmin.php?action=articles">Gerer mes articles</a></h3>  
    </div>
  </div>

  <div class="card bg-primary">
    <div class="card-body text-center">
    <h3><a href="hbAdmin.php?action=huitres">Gerer mes huitres</a></h3>    
    </div>
  </div>

  <div class="card bg-secondary">
    <div class="card-body text-center">
    <h3><a href="hbAdmin.php?action=producers">Gerer mes producteurs</a></h3>    
    </div>
  </div>

  <div class="card bg-success ">
    <div class="card-body text-center">
    <h3><a href="hbAdmin.php?action=messages">Gerer mes messages</a></h3>    
    </div>
  </div>

  <div class="card bg-danger">
    <div class="card-body text-center">
    <h3><a href="hbAdmin.php?action=commentaires">Gerer mes commentaires</a></h3>    
    </div>
  </div>
  
  <div class="card bg-info">
    <div class="card-body text-center">
    <h3><a href="">Gerer les Administrateurs</a></h3>  
    </div>
  </div>

</div>
</section>

<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>