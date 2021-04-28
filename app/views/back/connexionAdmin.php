<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style sheet -->
    <link rel="stylesheet" href="app\public\back\css\style.css">
    <title>Connexion Admin</title>
</head>

<body>

    <div class="container">
<!-- start connection admin -->
        <section id="connexion-admin" class="connexion-admin m-auto">
            <h1 class="text-center">Connexion Admin Huitre Bretagne</h1>
            <form id="sign-in-admin" action="hbAdmin.php?action=connexionAdmin" method="post">
                <h3 class="text-center">Connectez-vous</h3>
                <label for="c-mail">Email:</label>
                <input type="text" class=" form-item mail" name="mail" id="c-mail">

                <label for="c-pass">Mot de pass:</label>
                <input type="password" class="form-item in-psw" name="pass" id="c-pass">

                <button type="submit" onclick="return validateSignIn()" class="btn btn-default">Valider</button>
            </form>
                <a class="btn" href="/">Retour a l'accueil</a>
        </section>
<!-- end of connection admin -->
    </div>
</body>

</html>