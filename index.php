<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Sacha LHOPITAL</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Sacha LHOPITAL</h2>
            
            <br>
            
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Accueil</a></li>
                <li><a data-toggle="pill" href="#menu1">Qui suis-je ?</a></li>
                <li><a data-toggle="pill" href="#menu2">Mes projets</a></li>
                <li><a data-toggle="pill" href="#menu3">Embauchez-moi !</a></li>
                <li><a data-toggle="pill" href="#menu4">Me contacter</a></li>
            </ul>

            <div class="tab-content">
            
                <?php require_once('/html/home.html'); ?>
                <?php require_once('/html/me.html'); ?>
                <?php require_once('/html/projects.html'); ?>
                <?php require_once('/html/cv.html'); ?>    
                <?php require_once('/html/contact.html'); ?>
                
            </div>
        </div>

    </body>
</html>
