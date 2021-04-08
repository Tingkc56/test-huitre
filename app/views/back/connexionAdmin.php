<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
</head>

<body>
    <h1>Connexion Administrateur</h1>
        <div id="connexion form-group" >
            <form action="hbAdmin.php?action=connexionAdmin" method="post">
                <div>
                <h2 class="text-center">Connectez-vous</h2>
                    <label for="mail">Email:</label>
                    <input type="mail" name="mail" class="form-control mail" id="mail">

                    <label for="pass">Mot de pass:</label>
                    <input type="password" name="pass" class="form-control" id="pass">

                <button type="submit" class="btn btn-default">Valider</button>
            </form>
        </div>

    </div>
<br>
<br>
    <div class="retour">
        <a href="/">Retour a l'accueil</a>
    </div>

</body>

</html>