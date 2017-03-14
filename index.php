<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Sacha LHOPITAL</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="ressources/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="ressources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="ressources/style.css">

    </head>
    <body>

        <div class="container">

            <div class="header">
                <div class="row">
                    <div class="col-sm-3">
                        <img class="img-thumbnail img-responsive pull-left" src="ressources/images/profile.jpg" alt="Sacha Lhopital">
                    </div>

                    <div class="col-sm-6" align="center">
                        <h2>  Sacha Lhopital</h2>
                        <h3>  Étudiante en Ingénieurie Informatique</h3>
                        <br>
                        <div class="social">
                            <ul>
                                <li><a href="https://github.com/SachaLhopital"><i class="fa fa-lg fa-github fa-3x"></i></a></li>
                                <li><a href="https://fr.linkedin.com/in/sacha-lhopital-b6a308ba"><i class="fa fa-lg fa-linkedin-square fa-3x"></i></a></li>                        
                                <li><a href="https://trello.com/sachapiquechoux"><i class="fa fa-lg fa-trello fa-3x"></i></a></li>

                            </ul>
                        </div>
                        <br>
                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#home">Accueil</a></li>
                            <li><a data-toggle="pill" href="#menu1">Qui suis-je ?</a></li>
                            <li><a data-toggle="pill" href="#menu2">Mes projets</a></li>
                            <li><a data-toggle="pill" href="#menu3">Embauchez-moi !</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class = "thumbnail">
                            <a href="./ressources/pdf/CV_LHOPITALSacha.pdf"><img class="img-responsive" src="ressources/images/pdf_icon.png" alt=""/></a>
                            <div class = "caption">
                                <h4>Télécharger mon CV</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content">

                    <?php require_once('/html_fr/home.html'); ?>
                    <?php require_once('/html_fr/me.html'); ?>
                    <?php require_once('/html_fr/projects.html'); ?>
                    <?php require_once('/html_fr/cv.html'); ?>    

                    <?php // require_once('/customers/0/7/1/sachalhopital.fr//httpd.www/Bootstrap_Portfolio/html_fr/home.html'); ?>
                    <?php //require_once('/customers/0/7/1/sachalhopital.fr//httpd.www/Bootstrap_Portfolio/html_fr/me.html'); ?>
                    <?php //require_once('/customers/0/7/1/sachalhopital.fr//httpd.www/Bootstrap_Portfolio/html_fr/projects.html'); ?>
                    <?php //require_once('/customers/0/7/1/sachalhopital.fr//httpd.www/Bootstrap_Portfolio/html_fr/cv.html'); ?>    
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <p> Sité réalisé avec <i class="fa fa-heart"></i> par Sacha Lhopital </p>
                </div>
            </footer>

            <!-- jQuery -->
            <script src="./ressources/js/jquery.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="./ressources/bootstrap/js/bootstrap.min.js"></script>
            <!-- Scrolling Nav JavaScript -->
            <script src="./ressources/js/jquery.easing.min.js"></script>
            <script src="./ressources/js/scrolling-nav.js"></script>

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
