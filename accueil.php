<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="page-top">
<?php



    if(isset($_SESSION['profil']) ) {
        require("navClient.php");
    }
    else {
        require("navVisiteur.php");
    }

    ?>
<header class="masthead" style="background-image:url('Images/untrucdeouf.jpg');">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in "><span>Il faut une belle phrase la</span></div>
            <div class="intro-heading text-uppercase"><span>Louer votre voiture</span></div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="nosvoiture.php">Voir nos modèles</a></div>
    </div>
</header>
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Service de Location de voiture</h2>
                <h3 class="text-muted section-subheading">Ensemble pour la vie</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                <h4 class="section-heading">Location</h4>
                <p class="text-muted">Une location de luxe .</p>
            </div>
            <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span>
                <h4 class="section-heading">Votre Compte</h4>
                <p class="text-muted">Créez vous un compte est loué vite votre premiere voiture .</p>
            </div>
            <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lock fa-stack-1x fa-inverse"></i></span>
                <h4 class="section-heading">Sécurité</h4>
                <p class="text-muted">Site 100% sécurisé respectant le RGDP et toutes les lois. Condition de payement</p>
            </div>
        </div>
    </div>
</section>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2021</span></div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>
</body>

</html>
