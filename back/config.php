<?php
try {
    $pdo = new PDO('mysql:dbname=sorry_dad;host=localhost', 'root', '');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}