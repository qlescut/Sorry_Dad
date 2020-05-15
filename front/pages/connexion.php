<?php
require "../elements/header.php";
?>

    <head>
        <title>Sorry Dad</title>
        <link rel="stylesheet" href="../../style/plan_du_site.css">
        <link rel="stylesheet" href="../../style/no_scroll.css">
    </head>

    <div class="container_contenant" id="container_contenant">
        <h1 id="title_contenant">CONNEXION</h1>
        <div id="contenant">
            <form method="post" action="../../back/login.php">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur </label>
                    <input type="text" name="username">
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Mot de passe </label>
                    <input type="password" name="password">
                </div>
                <br>
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>

<?php
require "../elements/footer.php";
?>