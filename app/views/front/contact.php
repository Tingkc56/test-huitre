<?php ob_start(); ?>

<section class="contact m-auto">
    <h1 class="text-center">Nous contacter</h1>
    <form id="contact" class="form contact-form" action="index.php?action=getMessage" method="post" >
        <label for="usr">Nom</label>
        <input class="form-item form-name" type="text" id="usr" name="name" placeholder="Votre nom">

        <label for="mail">Email</label>
        <input class="form-item form-mail" type="email" id="mail" name="mail" placeholder="Votre email">

        <label for="sujet">Sujet</label>
        <input class="form-item form-subject" type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

        <label for="address">Adresse</label>
        <textarea class="form-item form-content" id="address" name="address" placeholder="Votre adresse" ></textarea>
        <div id="container"></div>

        <label for="content">Message</label>
        <textarea class="form-item form-content" id="content" name="content" placeholder="Votre message" ></textarea>
        
        <div class="text-center m-top-5 check-mention" >
        <input type="checkbox" id="condition" name="condition"  onclick="formConditionCheck(this)">
        <label for="condition">j'ai lu et accepte les <a href="index.php?action=mention">conditions générales.</a></label>
        </div>
        
        <button class="btn" type="submit" id="submit_button" disabled onclick="return validateContact()">Valider</button>
        
    </form>

</section>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>