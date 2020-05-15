<?php
require "../../back/login.php";
unset($_SESSION['id_admin']); 
unset($_SESSION['username']);
require "../elements/header.php";
?>

    <head>
        <title>Sorry Dad</title>
        <link rel="stylesheet" href="../../style/no_scroll.css">
    </head>

    <div class="container_contenant" id="container_contenant">
        <h1 id="title_contenant">DECONNEXION</h1>
        <div id="contenant">
            <p>Voux avez été déconnecté.</p>
        </div>
    </div>

<?php
require "../elements/footer.php";
?>