<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="contact m-auto">
    <h1 class="text-center">Nous contacter</h1>
    <form id="contact" class="form contact-form" action="index.php?action=getMessage" method="post" >
    <!-- 只要按下面的submit就会产生action，会去寻找contactMail这个function -->
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

        <button class="btn" type="submit" onclick="return validateContact()">Valider</button>
    </form>

</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>