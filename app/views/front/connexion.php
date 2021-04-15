<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section class="connect m-auto">
    <h1 class="text-center">Veuillez vous connecter</h1>

    <div class="admin flex-wrapper">
        <div id="inscription" class="flex-1-item-perline-s flex-2-item-perline-m">
                <h3 class="text-center">Inscrivez-vous</h3>
                <form id="signUp" action="index.php?action=creatUser" method="post">
                    <label for="name">Pseudo:</label>
                    <input type="text" class="form-item " placeholder="Votre Pseudo *" name="Pseudo" id="Pseudo">

                    <label for="i-mail">Email:</label>
                    <input type="text" class="form-item form-mail" placeholder="Votre Email *" name="mail"
                        id="i-mail">

                    <label for="i-pass">Mot de pass:</label>
                    <input type="password" class="form-item psw psw1" placeholder="Votre Mot de passe *" name="pass"
                        id="i-pass">

                    <label for="check-pass">Confirmer mot de pass:</label>
                    <input type="password" class="form-item psw psw2" placeholder="Confirmer votre Mot de passe *"
                        name="pass" id="check-pass">

                    <button type="submit" onclick="return validateSignUp()" class="btn btn-default">Valider</button>
                </form>
        </div>

        <div id="connexion" class="flex-1-item-perline-s flex-2-item-perline-m">
            <form id="signIn" action="index.php?action=connexionUser" method="post">
                    <h3 class="text-center">Connectez-vous</h3>
                    <label for="c-mail">Email:</label>
                    <input type="text" class=" form-item mail" name="mail" id="c-mail">

                    <label for="c-pass">Mot de pass:</label>
                    <input type="password" class="form-item in-psw" name="pass" id="c-pass">

                    <button type="submit" onclick="return validateSignIn()" class="btn btn-default">Valider</button>
            </form>
        </div>



    </div>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>