<?php

session_start();

$nom = isset($_POST['nom']) ? ($_POST['nom']) : '';
$prenom = isset($_POST['prenom']) ? ($_POST['prenom']) : '';
$pseudo = isset($_POST['pseudo']) ? ($_POST['pseudo']) : '';
$motdepasse = isset($_POST['motdepasse']) ? ($_POST['motdepasse']) : '';
$email = isset($_POST['email']) ? ($_POST['email']) : '';

$msg = '';

if (count($_POST) < 3)
    require('inscription.html');
else {
    if (!verif_inscription($nom, $prenom, $pseudo, $motdepasse, $email)) {
        $msg = "erreur de saisie";
        require('inscription.html');
    } else {
        require('connexion_bd.php');
        if (verif_connexion_bd($nom, $pseudo)) {
            $msg = "Erreur compte déjà existant !";
            require('inscription.html');
        } else {
            require('inscription_bd.php');
            if (!inserer_inscription_bd($nom, $prenom, $pseudo, $motdepasse, $email)) {
                $msg = "Echec insertion";
                require('inscription.html');
            } else {
                verif_connexion_bd($email, $motdepasse, $resultat);
                $_SESSION['profil'] = $resultat[0];
                $url = "accueil.php";
                header("Location:" . $url);
            }
        }
    }
}
function verif_inscription($nom, $prenom, $pseudo, $motdepasse, $email)
{
    return true; // TODO
}

?>
