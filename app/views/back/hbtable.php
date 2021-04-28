<?php ob_start(); ?>

<h1 class="text-center">Accueil</h1>

<section class="admin-accueil text-center">

    <ul class="admin-accueil-ul m-auto">
                        <li ><a 
                                href="hbAdmin.php?action=accueilAdmin">Accueil</a></li>
                        <li ><a href="hbAdmin.php?action=messages">Gérer
                                mes message</a></li>
                        <li ><a href="hbAdmin.php?action=huitres">Gérer
                                les Huitres</a></li>
                        <li ><a 
                                href="hbAdmin.php?action=producers">Gérer
                                les Producteurs</a></li>
                        <li ><a  href="hbAdmin.php?action=articles">Gérer les
                                mon blog</a>
                        </li>
                        <li ><a 
                                href="hbAdmin.php?action=commentaires">Gérer
                                mes commentaires</a></li>
                        <li >
                            <a href="hbAdmin.php?action=deconnexion">Deconnexion</a>
                        </li>
                    </ul>
</section>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>