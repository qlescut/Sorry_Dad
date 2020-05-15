<?php
session_start();
$errors = array();
require_once 'config.php';
if (!empty($_POST)) {
    if (empty($_POST['title'])) {
        $req = $pdo->prepare('SELECT id FROM news WHERE title = ?');
        $req->execute([$_POST['title']]);
        $article = $req->fetch();
    }
    if (empty($_POST['text'])) {
        $errors['text'];
    } else {
        $req = $pdo->prepare('SELECT id FROM news WHERE text = ?');
        $req->execute([$_POST['text']]);
        $article = $req->fetch();
    }
    if (empty($errors)) {
        $req = $pdo->prepare("INSERT INTO news SET title = ?, text = ?");
        $req->execute([$_POST['title'], $_POST['text']]);
        $article_id = $pdo->lastInsertId();
        header('Location: ../front/pages/news.php');
        exit();
    }
}