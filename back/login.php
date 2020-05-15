<?php
//On reprend la suite du code
session_start(); 
$erreur = null;
require_once 'config.php';
    if (empty($_POST['username']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $erreur = "Idenfiants incorrects";
    }
    else //On check le mot de passe
    {
        $req=$pdo->prepare('SELECT id_admin, username, password FROM admin WHERE username = :username');
        $req->bindValue(':username',$_POST['username'], PDO::PARAM_STR);
        $req->execute();
        $data=$req->fetch();
	if ($data['password'] == $_POST['password']) // Acces OK !
	{
	    $_SESSION['id_admin'] = $data['id_admin'];
	    $_SESSION['username'] = $data['username'];
        header('Location: ../front/pages/connexion_reussie.php');
	}
	else // Acces pas OK !
	{
        $erreur = "Idenfiants incorrects";
	}
    $req->CloseCursor();
    }

?>
