<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <!-- style sheet -->
    <link rel="stylesheet" href="app/public/back/css/style.css">

    <title>Admini</title>
</head>

<body>

<!-- start navbar -->
    <header>
        <div class="navbar-background">
            <nav class="navbar flex-wrapper">
                <div class="container"><a href="hbAdmin.php?action=accueilAdmin" class="nav-logo"><span
                            class="text-logo">HUITRE
                            BRETAGNE</span> </a> </div>
                <!-- nav burger icon -->
                <div class="navbar-toggler">
                    <span class="navbar-toggler-icon">
                        <svg viewBox="0 0 100 100" width="40" height="40">
                            <rect width="100" height="20"></rect>
                            <rect y="40" width="100" height="20"></rect>
                            <rect y="80" width="100" height="20"></rect>
                        </svg>
                    </span>
                </div>
                <div class="navbar-admin navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-ul">
                        <li class="nav-li welcome-message">Bienvenu <?= $_SESSION['name'] ?></li>
                        <li class="nav-li"><a class="nav-a"
                                href="hbAdmin.php?action=accueilAdmin">Accueil</a></li>
                        <li class="nav-li"><a class="nav-a" href="hbAdmin.php?action=messages">Gérer
                                mes message</a></li>
                        <li class="nav-li"><a class="nav-a" href="hbAdmin.php?action=huitres">Gérer
                                les Huitres</a></li>
                        <li class="nav-li"><a class="nav-a"
                                href="hbAdmin.php?action=producers">Gérer
                                les Producteurs</a></li>
                        <li class="nav-li"><a class="nav-a" href="hbAdmin.php?action=articles">Gérer mon blog</a>
                        </li>
                        <li class="nav-li"><a class="nav-a"
                                href="hbAdmin.php?action=commentaires">Gérer
                                mes commentaires</a></li>
                        <li class="nav-li">
                            <a class="nav-a" href="hbAdmin.php?action=deconnexion">Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="nav-bottom-line"></div>
        </div>
    </header>
<!-- end of navbar -->

<!-- start main pages -->
    <main>
        <div class="container right-container">
            <?= $content ?>
        </div>
    </main>
<!-- end of main pages -->

<!-- start footer -->
    <footer>
            <div class="container admin-footer">
                <p class="foot-mention">&copy; Huitre Bretagne 2021. Conditions générales d’utilisation et <a
                        href="index.php?action=mention">mentions légales.</a></p>
            </div>
        </div>
    </footer>
<!-- send of footer -->

    <!-- js -->
    <script src="app\public\front\js\validateForm.js"></script>
    <script src="app\public\front\js\categoryBlog.js"></script>
    <script src="app\public\front\js\burger.js"></script>

</body>

</html>