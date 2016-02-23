<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Sacha LHOPITAL</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>

        <div class="container">
            <img class="img-thumbnail img-responsive pull-left" src="images/profile.jpg" alt="Sacha Lhopital">
            <div class="header">
                <h2>Sacha Lhopital</h2>
                <h3>Étudiante en Ingénieurie Informatique</h3>
                <div class="social">
                    <ul>
                        <li><a href="https://github.com/SachaLhopital"><i class="fa fa-lg fa-github fa-3x"></i></a></li>
                        <li><a href="https://fr.linkedin.com/in/sacha-lhopital-b6a308ba"><i class="fa fa-lg fa-linkedin-square fa-3x"></i></a></li>                        
                        <li><a href="https://trello.com/sachapiquechoux"><i class="fa fa-lg fa-trello fa-3x"></i></a></li>

                    </ul>
                </div>

                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">Accueil</a></li>
                    <li><a data-toggle="pill" href="#menu1">Qui suis-je ?</a></li>
                    <li><a data-toggle="pill" href="#menu2">Mes projets</a></li>
                    <li><a data-toggle="pill" href="#menu3">Embauchez-moi !</a></li>
                    <li><a data-toggle="pill" href="#menu4">Me contacter</a></li>
                </ul>
            </div>

            <div class="tab-content">

                <?php require_once('/html/home.html'); ?>
                <?php require_once('/html/me.html'); ?>
                <?php require_once('/html/projects.html'); ?>
                <?php require_once('/html/cv.html'); ?>    
                <?php require_once('/html/contact.html'); ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p> Sité réalisé avec <i class="fa fa-heart"></i> par Sacha Lhopital </p>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="./js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="./bootstrap/js/bootstrap.min.js"></script>
        <!-- Scrolling Nav JavaScript -->
        <script src="./js/jquery.easing.min.js"></script>
        <script src="./js/scrolling-nav.js"></script>

        <!-- Back to top button script -->
        <script>
             jQuery(document).ready(function() {

                var offset = 250;
                var duration = 300;

                jQuery(window).scroll(function() {

                    if (jQuery(this).scrollTop() > offset) {
                        jQuery(‘.back-to-top’).fadeIn(duration);
                    } else {
                        jQuery(‘.back-to-top’).fadeOut(duration);
                    }
                });

                &nbsp;

                jQuery(‘.back-to-top’).click(function(event) {

                    event.preventDefault();
                    jQuery(‘html, body’).animate({scrollTop: 0}, duration);
                    return false;
                })
            });
        </script>

    </body>
</html>
