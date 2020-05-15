<?php
require "../../back/login.php";
require "../elements/header.php";
?>

    <head>
        <title>Sorry Dad</title>
        <link rel="stylesheet" href="../../style/plan_du_site.css">
        <link rel="stylesheet" href="../../style/no_scroll.css">
    </head>

    <div class="container_contenant" id="container_contenant">
        <h1 id="title_contenant">PLAN DU SITE</h1>
        <div id="contenant">
            <p>
                <a href="accueil.php">Accueil</a>
                <br>
                <a href="news.php">News</a>
                <br>
                <a href="galerie.php">Galerie</a>
                <br>
                <a href="projet.php">Projet</a>
                <br>
                <a href="bio.php">Bio</a>
                <br>
                <a href="contact.php">Contact</a>
                <br>

                <?php 
                if (isset($_SESSION['id_admin']) && ($_SESSION['username'])) {
                    echo '<a href="deconnexion.php">Déconnexion</a>';
                } else { 

                    echo '<a href="connexion.php">Connexion</a>';
                } ?>
                
            </p>
        </div>
    </div>

<?php
require "../elements/footer.php";
?>