<?php
require "../../back/login.php";
require "../elements/header.php";
?>

    <head>
        <title>Sorry Dad</title>
        <link rel="stylesheet" href="../../style/news.css">
    </head>

    <div class="container_contenant" id="container_contenant">
        <h1 id="title_contenant">NEWS</h1>
        <div id="contenant">

            <div id="news">
            
            <?php 
                if (isset($_SESSION['id_admin']) && ($_SESSION['username'])) { 
                    echo '<form method="post" action="../../back/send_articles.php">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" name="title" size="50">
                        </div>
                        <div class="form-group">
                            <label for="text">Message</label>
                            <input type="text" name="text" size="75">
                        </div>
                        <br>
                        <button type="submit">Publier</button>
                    </form>';
                }
                require "../../back/get_articles.php"; 
                ?>

            </div>

        
        </div>
    </div>

<?php
require "../elements/footer.php";
?>