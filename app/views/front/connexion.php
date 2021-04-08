<?php ob_start(); ?>
<!-- fonction php pour injecter le header -->

<section>
    <div class="connect form-group m-auto">
    <h1 class="text-center">Veuillez vous connecter</h1>
    <div class="admin row">

        <div id="inscription" class="col">
            <div class="form-group">
                <h3 class="text-center">Inscrivez-vous</h3>
                <form id="signUp" action="index.php?action=creatUser" method="post">
                    <label for="name">Pseudo:</label>
                    <input type="text" class="form-control " placeholder="Votre Pseudo *" name="Pseudo" id="Pseudo">

                    <label for="i-mail">Email:</label>
                    <input type="text" class="form-control form-mail" placeholder="Votre Email *" name="mail" id="i-mail">

                    <label for="i-pass">Mot de pass:</label>
                    <input type="password" class="form-control psw psw1" placeholder="Votre Mot de passe *" name="pass" id="i-pass">

                    <label for="check-pass">Confirmer mot de pass:</label>
                    <input type="password" class="form-control psw psw2" placeholder="Confirmer votre Mot de passe *" name="pass" id="check-pass">

                    <button type="submit"  onclick="return validateSignUp()" class="btn btn-default">Valider</button>
                </form>
            </div>
        </div>

        <div id="connexion" class="col">
            <form id="signIn" action="index.php?action=connexionUser" method="post">
                <div class="form-group">
                <h3 class="text-center">Connectez-vous</h3>
                    <label for="c-mail">Email:</label>
                    <input type="text" class=" form-control mail" name="mail" id="c-mail">

                    <label for="c-pass">Mot de pass:</label>
                    <input type="password" class="form-control in-psw" name="pass" id="c-pass">

                <button type="submit"  onclick="return validateSignIn()" class="btn btn-default">Valider</button>
            </form>
        </div>



    </div>
</div>
</section>


<?php $content = ob_get_clean(); ?>
<!-- fonction php pour injecter le template -->
<?php require 'templates/template.php'; ?>