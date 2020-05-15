<?php
session_start();
$errors = array();
require_once 'config.php';
if (!empty($_POST)) {
    if (empty($_POST['mail'])) {
        $req = $pdo->prepare('SELECT id FROM projet WHERE mail = ?');
        $req->execute([$_POST['mail']]);
        $project = $req->fetch();
    }
    if (empty($_POST['sexe'])) {
        $errors['sexe'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE sexe = ?');
        $req->execute([$_POST['sexe']]);
        $project = $req->fetch();
    }
    if (empty($_POST['style'])) {
        $errors['style'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE style = ?');
        $req->execute([$_POST['style']]);
        $project = $req->fetch();
    }
    if (empty($_POST['theme'])) {
        $errors['theme'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE theme = ?');
        $req->execute([$_POST['theme']]);
        $project = $req->fetch();
    }
    if (empty($_POST['emplacement'])) {
        $errors['emplacement'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE emplacement = ?');
        $req->execute([$_POST['emplacement']]);
        $project = $req->fetch();
    }
    if (empty($_POST['position'])) {
        $errors['position'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE position = ?');
        $req->execute([$_POST['position']]);
        $project = $req->fetch();
    }
    if (empty($_POST['hauteur'])) {
        $errors['hauteur'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE hauteur = ?');
        $req->execute([$_POST['hauteur']]);
        $project = $req->fetch();
    }
    if (empty($_POST['largeur'])) {
        $errors['largeur'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE largeur = ?');
        $req->execute([$_POST['largeur']]);
        $project = $req->fetch();
    }
    if (empty($_POST['choix'])) {
        $errors['choix'];
    } else {
        $req = $pdo->prepare('SELECT id FROM projet WHERE choix = ?');
        $req->execute([$_POST['choix']]);
        $project = $req->fetch();
    }

    if (empty($errors)) {
        $req = $pdo->prepare("INSERT INTO projet SET mail = ?, sexe = ?, style = ?, theme = ?, emplacement = ?, position = ?, hauteur = ?, largeur = ?, choix = ?");
        $req->execute([$_POST['mail'], $_POST['sexe'], $_POST['style'], $_POST['theme'], $_POST['emplacement'], $_POST['position'], $_POST['hauteur'], $_POST['largeur'], $_POST['choix']]);
        $project_id = $pdo->lastInsertId();
        header('Location: ../front/pages/projet_envoye.php');
        exit();
    }
}
