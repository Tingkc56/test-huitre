<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <!-- style sheet -->
    <link rel="stylesheet" href="app/public/front/css/style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="app/public/front/images/favicon.ico">

    <title>Huîltre Bretagne</title>
</head>

<body>
    <header>
        <div class="navbar-background">
            <nav class="navbar container flex-wrapper">
                <div><a href="/" class="nav-logo"><img class="logo img-br-10px"
                            src="app/public/front/images/huitre-bretagne.png" alt="huitre bretagne"><span
                            class="text-logo">HUITRE BRETAGNE</span> </a> </div>
                <!-- nav bar -->
                <div class="navbar-toggler">
                    <span class="navbar-toggler-icon">
                        <svg viewBox="0 0 100 100" width="40" height="40">
                            <rect width="100" height="20"></rect>
                            <rect y="40" width="100" height="20"></rect>
                            <rect y="80" width="100" height="20"></rect>
                        </svg>
                    </span>
                </div>
                <div class="navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-ul">
                        <li class="nav-li flex-6-item-perline"><a class="nav-a" href="/">Accueil</a></li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a"
                                href="index.php?action=huitres">Huitres</a></li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a"
                                href="index.php?action=producers">Producteurs</a></li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a" href="index.php?action=blog">Blog</a>
                        </li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a"
                                href="index.php?action=contact">Contact</a></li>
                        <?php if(isset($_SESSION['pseudo'])): ?>
                        <li class="nav-li flex-6-item-perline">
                            <a class="nav-a" href="index.php?action=userInfos"><?= $_SESSION['pseudo'] ?></a>
                            <a class="nav-a" href="index.php?action=disConnect">(Deconnexion)</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-li flex-6-item-perline">
                            <a class="nav-a" href="index.php?action=connect">Connexion</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
            <div class="nav-bottom-line"></div>
        </div>

    </header>

    <!-- main pages -->
    <main>
        <div class="container">
            <?= $content ?>
        </div>
    </main>

    <!-- footer -->
    <footer>
        <div class="foot-backgroud">
            <div class="food-top-line"></div>
            <div class="nav-footer flex-wrapper container">
            <!-- footer-link -->
                <div class="flex-3-item-perline-s flex-4-item-perline-l">
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="index.php?action=huitres">Huitres</a></li>
                        <li><a href="index.php?action=producers">Producteurs</a></li>
                        <li><a href="index.php?action=blog">Blog</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                        <li><a href="index.php?action=connect">Connexion</a></li>
                    </ul>
                </div>
            <!-- footer presentation -->
                <div class="flex-3-item-perline-s flex-4-item-perline-l foot-presentation">
                    <img class="hidden l-show img-fluid" src="app/public/front/images/huitre-bretagne.png"
                        alt="huitre-bretagne">
                    <h4 class="foot-title">Huitre Bretagne</h4>
                    <h5 class="hidden l-show">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis in ab vitae,
                        quis molestiae nobis commodi obcaecati!</h5>
                    <h5><a href="tel:+33268686868">02 68 68 68 68</a></h5>
                    <h5>info@huitre-bretagne.com</h5>
                </div>
            <!-- footer newsletter -->
                <div class="hidden l-show flex-4-item-perline-l">
                    <h4>Ma newsletter</h4>
                    <p>Retrouvez tous les mois nos infos, articles, recettes et nouveautés. Produits 100% BIO !</p>
                    <form method="POST">
                        <input type="email" name="email" placeholder="Votre Email..."><br>
                        <input class="btn gold-btn" type="submit" value="Je m'inscris">
                    </form>
                </div>
            <!-- footer socials -->
                <div class="flex-3-item-perline-s flex-4-item-perline-l">
                    <h4>Suivez-nous</h4>
                    <ul>
                        <li><a href="/"></a>Facebook</li>
                        <li><a href="/"></a>Pinterest</li>
                        <li><a href="/"></a>Instagram</li>
                    </ul>
                </div>
            </div>
            <div>
            <!-- copyright -->
                <div class="footer_top container">
                    <p class="foot-mention">&copy; Huitre Bretagne 2021. Conditions générales d’utilisation et <a
                            href="index.php?action=mention">conditions générales.</a></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- javascripts -->
    <script src="app/public/front/js/cookie.js"></script>
    <script src="app/public/front/js/validateForm.js"></script>
    <script src="app/public/front/js/categoryBlog.js"></script>
    <script src="app/public/front/js/burger.js"></script>
    <script src="app/public/front/js/adressApi.js"></script>



</body>

</html>