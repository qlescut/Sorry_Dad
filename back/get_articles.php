<?php
try {
    require_once "../../back/config.php";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$req = $pdo->prepare('SELECT id_news, title, date, text, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin\') AS date_fr FROM news
ORDER BY id_news DESC LIMIT 10');
$req->execute(array());
while ($donnees = $req->fetch())
{ ?>
    <link rel="stylesheet" href="../../style/news.css">
    <h3>
    <?php 
        echo htmlspecialchars($donnees['title']);
    ?>
    </h3>
    <h4>
    <?php 
        echo htmlspecialchars($donnees['date']);
    ?>
    </h4>
    <p>
        <?php
        echo nl2br(htmlspecialchars($donnees['text']));
        ?>
    </p>
<?php } ?>